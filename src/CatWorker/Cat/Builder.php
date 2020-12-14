<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker\Cat;

use LogicException;
use Amyb9\CatService\CatWorker\CatInterface;
use Amyb9\CatService\CatWorker\Tail;
use Amyb9\CatService\CatWorker\Claw;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use Tail\Builder\Factory\AwareTrait;
    use Claw\Builder\Factory\AwareTrait;

    protected $record;

    public function build(): CatInterface
    {
        // Get a fully built Tail.
        $TailBuilder = $this->getCatWorkerTailBuilderFactory()->create();
        $Tail = $TailBuilder->setRecord($this->getRecord())->build();

        // Get a fully built Claw.
        $ClawBuilder = $this->getCatWorkerClawBuilderFactory()->create();
        $Claw = $ClawBuilder->setRecord($this->getRecord())->build();

        // Get a Cat from the Factory and construct it with the input and other composite objects from the other Builders.
        $Cat = $this->getCatWorkerCatFactory()->create();
        $Cat->setEyeColor($this->getRecord()['EyeColor']);
        $Cat->setTail($Tail);
        $Cat->setClaw($Claw);

        return $Cat;
    }

    protected function getRecord(): array
    {
        if ($this->record === null) {
            throw new LogicException('Builder record has not been set.');
        }

        return $this->record;
    }

    public function setRecord(array $record): BuilderInterface
    {
        if ($this->record !== null) {
            throw new LogicException('Builder record is already set.');
        }

        $this->record = $record;

        return $this;
    }
}

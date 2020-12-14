<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker\Claw;

use LogicException;
use Amyb9\CatService\CatWorker\ClawInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    protected $record;

    public function build(): ClawInterface
    {
        $Claw = $this->getCatWorkerClawFactory()->create();
        $Claw->setColor($this->getRecord()['Claw.Color']);
        $Claw->setIsSharp($this->getRecord()['Claw.IsSharp']);
        $Claw->setState($this->getRecord()['Claw.State']);

        return $Claw;
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

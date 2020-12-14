<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker\Tail;

use LogicException;
use Amyb9\CatService\CatWorker\TailInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    protected $record;

    public function build(): TailInterface
    {
        $Tail = $this->getCatWorkerTailFactory()->create();
        $Tail->setLengthInInches($this->getRecord()['Tail.LengthInInches']);

        return $Tail;
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

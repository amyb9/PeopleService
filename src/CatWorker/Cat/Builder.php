<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker\Cat;

use LogicException;
use Amyb9\CatService\CatWorker\CatInterface;
use Amyb9\CatService\CatWorker\Tail;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use Tail\Builder\Factory\AwareTrait;

    protected $record;

    public function build(): CatInterface
    {
        $Cat = $this->getCatWorkerCatFactory()->create();


        // @TODO - build the object.
        throw new \LogicException('Unimplemented build method.');

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

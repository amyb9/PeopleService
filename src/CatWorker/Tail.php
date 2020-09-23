<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker;

use LogicException;

class Tail implements TailInterface
{
    private int $lengthInInches;

    public function setLengthInInches(int $length): TailInterface
    {
        if (isset($this->lengthInInches)) {
            throw new LogicException('Length in inches is already set.');
        }

        $this->lengthInInches = $length;

        return $this;
    }

    public function getLengthInInches(): int
    {
        if (!isset($this->lengthInInches)) {
            throw new LogicException('Length in inches has not been set.');
        }

        return $this->lengthInInches;
    }
}

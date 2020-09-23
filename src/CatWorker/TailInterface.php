<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker;

interface TailInterface
{
    public function setLengthInInches(int $length): TailInterface;

    public function getLengthInInches(): int;
}

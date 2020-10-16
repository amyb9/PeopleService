<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker;

interface CatInterface
{
    public function getEyeColor(): string;

    public function setEyeColor(string $eyeColor): CatInterface;

    public function getTail(): TailInterface;

    public function setTail(TailInterface $tail): CatInterface;
}

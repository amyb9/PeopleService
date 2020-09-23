<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker;

use LogicException;

class Cat implements CatInterface
{
    private string $eyeColor;
    private TailInterface $tail;

    public function meow(): CatInterface
    {
        echo "meow world!\n";
        return $this;
    }

    public function setEyeColor(string $eyeColor): CatInterface
    {
        if (isset($this->eyeColor)) {
            throw new LogicException('Eye Color is already set.');
        }

        $this->eyeColor = $eyeColor;

        return $this;
    }

    public function getEyeColor(): string
    {
        if (!isset($this->eyeColor)) {
            throw new LogicException('Eye Color has not been set.');
        }

        return $this->eyeColor;
    }

    public function setTail(TailInterface $tail): CatInterface
    {
        if (isset($this->tail)) {
            throw new LogicException('Tail is already set.');
        }

        $this->tail = $tail;

        return $this;
    }

    public function getTail(): TailInterface
    {
        if (isset($this->tail)) {
            throw new LogicException('Tail has not been set.');
        }

        return $this->tail;
    }
}

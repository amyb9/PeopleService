<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker;

use LogicException;

class Cat implements CatInterface
{
    private string $eyeColor;
    private TailInterface $tail;
    // Refactor to RightFrontClaw, LeftFrontClaw, BackRightClaw, & BackLeftClaw.
    private ClawInterface $Claw;

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

    public function setClaw(ClawInterface $Claw): CatInterface
    {
        if (isset($this->Claw)) {
            throw new LogicException('Claw is already set.');
        }

        $this->Claw = $Claw;

        return $this;
    }

    public function getClaw(): ClawInterface
    {
        if (!isset($this->Claw)) {
            throw new LogicException('Claw has not been set.');
        }

        return $this->Claw;
    }
}

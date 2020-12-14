<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker;

use LogicException;

class Claw implements ClawInterface
{
    private bool $IsSharp;
    private string $State;
    private string $Color;

    public function setIsSharp(bool $IsSharp): ClawInterface
    {
        if (isset($this->IsSharp)) {
            throw new LogicException('Is Sharp is already set.');
        }

        $this->IsSharp = $IsSharp;

        return $this;
    }

    public function setState(string $State): ClawInterface
    {
        if (isset($this->State)) {
            throw new LogicException('State is already set.');
        }

        $this->State = $State;

        return $this;
    }

    public function setColor(string $Color): ClawInterface
    {
        if (isset($this->Color)) {
            throw new LogicException('Color is already set.');
        }

        $this->Color = $Color;

        return $this;
    }

    public function getIsSharp(): bool
    {
        if (!isset($this->IsSharp)) {
            throw new LogicException('Is Sharp has not been set.');
        }

        return $this->IsSharp;
    }

    public function getState(): string
    {
        if (!isset($this->State)) {
            throw new LogicException('State has not been set.');
        }

        return $this->State;
    }

    public function getColor(): string
    {
        if (!isset($this->Color)) {
            throw new LogicException('Color has not been set.');
        }

        return $this->Color;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker;

interface ClawInterface
{
    public function setColor(string $Color): ClawInterface;

    public function setIsSharp(bool $IsSharp): ClawInterface;

    public function setState(string $State): ClawInterface;

    public function getIsSharp(): bool;

    public function getColor(): string;

    public function getState(): string;
}

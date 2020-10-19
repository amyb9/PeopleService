<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Time;

use Amyb9\CatService\Prefab5\TimeInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceTime;

    public function setTime(TimeInterface $time): self
    {
        if ($this->hasTime()) {
            throw new \LogicException('Amyb9CatServiceTime is already set.');
        }
        $this->Amyb9CatServiceTime = $time;

        return $this;
    }

    protected function getTime(): TimeInterface
    {
        if (!$this->hasTime()) {
            throw new \LogicException('Amyb9CatServiceTime is not set.');
        }

        return $this->Amyb9CatServiceTime;
    }

    protected function hasTime(): bool
    {
        return isset($this->Amyb9CatServiceTime);
    }

    protected function unsetTime(): self
    {
        if (!$this->hasTime()) {
            throw new \LogicException('Amyb9CatServiceTime is not set.');
        }
        unset($this->Amyb9CatServiceTime);

        return $this;
    }
}

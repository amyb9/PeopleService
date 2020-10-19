<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\NewRelic;

use Amyb9\CatService\Prefab5\NewRelicInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceNewRelic;

    public function setNewRelic(NewRelicInterface $newRelic): self
    {
        if ($this->hasNewRelic()) {
            throw new \LogicException('Amyb9CatServiceNewRelic is already set.');
        }
        $this->Amyb9CatServiceNewRelic = $newRelic;

        return $this;
    }

    protected function getNewRelic(): NewRelicInterface
    {
        if (!$this->hasNewRelic()) {
            throw new \LogicException('Amyb9CatServiceNewRelic is not set.');
        }

        return $this->Amyb9CatServiceNewRelic;
    }

    protected function hasNewRelic(): bool
    {
        return isset($this->Amyb9CatServiceNewRelic);
    }

    protected function unsetNewRelic(): self
    {
        if (!$this->hasNewRelic()) {
            throw new \LogicException('Amyb9CatServiceNewRelic is not set.');
        }
        unset($this->Amyb9CatServiceNewRelic);

        return $this;
    }
}

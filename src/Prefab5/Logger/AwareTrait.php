<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Logger;

use Amyb9\CatService\Prefab5\LoggerInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServicePrefab5Logger;

    public function setPrefab5Logger(LoggerInterface $prefab5Logger) : self
    {
        if ($this->hasPrefab5Logger()) {
            throw new \LogicException('Amyb9CatServicePrefab5Logger is already set.');
        }
        $this->Amyb9CatServicePrefab5Logger = $prefab5Logger;

        return $this;
    }

    protected function getPrefab5Logger() : LoggerInterface
    {
        if (!$this->hasPrefab5Logger()) {
            throw new \LogicException('Amyb9CatServicePrefab5Logger is not set.');
        }

        return $this->Amyb9CatServicePrefab5Logger;
    }

    protected function hasPrefab5Logger() : bool
    {
        return isset($this->Amyb9CatServicePrefab5Logger);
    }

    protected function unsetPrefab5Logger() : self
    {
        if (!$this->hasPrefab5Logger()) {
            throw new \LogicException('Amyb9CatServicePrefab5Logger is not set.');
        }
        unset($this->Amyb9CatServicePrefab5Logger);

        return $this;
    }
}

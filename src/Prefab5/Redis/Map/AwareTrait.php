<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Redis\Map;

use Amyb9\CatService\Prefab5\Redis\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceRedisMap;

    public function setRedisMap(MapInterface $redisMap): self
    {
        if ($this->hasRedisMap()) {
            throw new \LogicException('Amyb9CatServiceRedisMap is already set.');
        }
        $this->Amyb9CatServiceRedisMap = $redisMap;

        return $this;
    }

    protected function getRedisMap(): MapInterface
    {
        if (!$this->hasRedisMap()) {
            throw new \LogicException('Amyb9CatServiceRedisMap is not set.');
        }

        return $this->Amyb9CatServiceRedisMap;
    }

    protected function hasRedisMap(): bool
    {
        return isset($this->Amyb9CatServiceRedisMap);
    }

    protected function unsetRedisMap(): self
    {
        if (!$this->hasRedisMap()) {
            throw new \LogicException('Amyb9CatServiceRedisMap is not set.');
        }
        unset($this->Amyb9CatServiceRedisMap);

        return $this;
    }
}

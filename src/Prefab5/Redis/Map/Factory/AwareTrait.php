<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Redis\Map\Factory;

use Amyb9\CatService\Prefab5\Redis\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceRedisMapFactory;

    public function setRedisMapFactory(FactoryInterface $redisMapFactory): self
    {
        if ($this->hasRedisMapFactory()) {
            throw new \LogicException('Amyb9CatServiceRedisMapFactory is already set.');
        }
        $this->Amyb9CatServiceRedisMapFactory = $redisMapFactory;

        return $this;
    }

    protected function getRedisMapFactory(): FactoryInterface
    {
        if (!$this->hasRedisMapFactory()) {
            throw new \LogicException('Amyb9CatServiceRedisMapFactory is not set.');
        }

        return $this->Amyb9CatServiceRedisMapFactory;
    }

    protected function hasRedisMapFactory(): bool
    {
        return isset($this->Amyb9CatServiceRedisMapFactory);
    }

    protected function unsetRedisMapFactory(): self
    {
        if (!$this->hasRedisMapFactory()) {
            throw new \LogicException('Amyb9CatServiceRedisMapFactory is not set.');
        }
        unset($this->Amyb9CatServiceRedisMapFactory);

        return $this;
    }
}

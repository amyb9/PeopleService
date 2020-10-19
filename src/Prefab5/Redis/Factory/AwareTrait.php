<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Redis\Factory;

use Amyb9\CatService\Prefab5\Redis\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceRedisFactory;

    public function setRedisFactory(FactoryInterface $redisFactory): self
    {
        if ($this->hasRedisFactory()) {
            throw new \LogicException('Amyb9CatServiceRedisFactory is already set.');
        }
        $this->Amyb9CatServiceRedisFactory = $redisFactory;

        return $this;
    }

    protected function getRedisFactory(): FactoryInterface
    {
        if (!$this->hasRedisFactory()) {
            throw new \LogicException('Amyb9CatServiceRedisFactory is not set.');
        }

        return $this->Amyb9CatServiceRedisFactory;
    }

    protected function hasRedisFactory(): bool
    {
        return isset($this->Amyb9CatServiceRedisFactory);
    }

    protected function unsetRedisFactory(): self
    {
        if (!$this->hasRedisFactory()) {
            throw new \LogicException('Amyb9CatServiceRedisFactory is not set.');
        }
        unset($this->Amyb9CatServiceRedisFactory);

        return $this;
    }
}

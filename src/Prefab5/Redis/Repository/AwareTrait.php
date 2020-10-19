<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Redis\Repository;

use Amyb9\CatService\Prefab5\Redis\RepositoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceRedisRepository;

    public function setRedisRepository(RepositoryInterface $redisRepository): self
    {
        if ($this->hasRedisRepository()) {
            throw new \LogicException('Amyb9CatServiceRedisRepository is already set.');
        }
        $this->Amyb9CatServiceRedisRepository = $redisRepository;

        return $this;
    }

    protected function getRedisRepository(): RepositoryInterface
    {
        if (!$this->hasRedisRepository()) {
            throw new \LogicException('Amyb9CatServiceRedisRepository is not set.');
        }

        return $this->Amyb9CatServiceRedisRepository;
    }

    protected function hasRedisRepository(): bool
    {
        return isset($this->Amyb9CatServiceRedisRepository);
    }

    protected function unsetRedisRepository(): self
    {
        if (!$this->hasRedisRepository()) {
            throw new \LogicException('Amyb9CatServiceRedisRepository is not set.');
        }
        unset($this->Amyb9CatServiceRedisRepository);

        return $this;
    }
}

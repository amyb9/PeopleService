<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\Repository;

use Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\RepositoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceDoctrineDBALConnectionDecoratorRepository;

    public function setDoctrineDBALConnectionDecoratorRepository(
        RepositoryInterface $doctrineDBALConnectionDecoratorRepository
    ): self {
        if ($this->hasDoctrineDBALConnectionDecoratorRepository()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorRepository is already set.');
        }
        $this->Amyb9CatServiceDoctrineDBALConnectionDecoratorRepository = $doctrineDBALConnectionDecoratorRepository;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorRepository(): RepositoryInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorRepository()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorRepository is not set.');
        }

        return $this->Amyb9CatServiceDoctrineDBALConnectionDecoratorRepository;
    }

    protected function hasDoctrineDBALConnectionDecoratorRepository(): bool
    {
        return isset($this->Amyb9CatServiceDoctrineDBALConnectionDecoratorRepository);
    }

    protected function unsetDoctrineDBALConnectionDecoratorRepository(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorRepository()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorRepository is not set.');
        }
        unset($this->Amyb9CatServiceDoctrineDBALConnectionDecoratorRepository);

        return $this;
    }
}

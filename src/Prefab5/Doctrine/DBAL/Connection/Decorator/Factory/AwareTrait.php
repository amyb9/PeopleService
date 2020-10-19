<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\Factory;

use Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceDoctrineDBALConnectionDecoratorFactory;

    public function setDoctrineDBALConnectionDecoratorFactory(FactoryInterface $doctrineDBALConnectionDecoratorFactory
    ): self {
        if ($this->hasDoctrineDBALConnectionDecoratorFactory()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorFactory is already set.');
        }
        $this->Amyb9CatServiceDoctrineDBALConnectionDecoratorFactory = $doctrineDBALConnectionDecoratorFactory;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorFactory(): FactoryInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorFactory()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorFactory is not set.');
        }

        return $this->Amyb9CatServiceDoctrineDBALConnectionDecoratorFactory;
    }

    protected function hasDoctrineDBALConnectionDecoratorFactory(): bool
    {
        return isset($this->Amyb9CatServiceDoctrineDBALConnectionDecoratorFactory);
    }

    protected function unsetDoctrineDBALConnectionDecoratorFactory(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorFactory()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorFactory is not set.');
        }
        unset($this->Amyb9CatServiceDoctrineDBALConnectionDecoratorFactory);

        return $this;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\Map\Factory;

use Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceDoctrineDBALConnectionDecoratorMapFactory;

    public function setDoctrineDBALConnectionDecoratorMapFactory(
        FactoryInterface $doctrineDBALConnectionDecoratorMapFactory
    ): self {
        if ($this->hasDoctrineDBALConnectionDecoratorMapFactory()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorMapFactory is already set.');
        }
        $this->Amyb9CatServiceDoctrineDBALConnectionDecoratorMapFactory = $doctrineDBALConnectionDecoratorMapFactory;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorMapFactory(): FactoryInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMapFactory()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorMapFactory is not set.');
        }

        return $this->Amyb9CatServiceDoctrineDBALConnectionDecoratorMapFactory;
    }

    protected function hasDoctrineDBALConnectionDecoratorMapFactory(): bool
    {
        return isset($this->Amyb9CatServiceDoctrineDBALConnectionDecoratorMapFactory);
    }

    protected function unsetDoctrineDBALConnectionDecoratorMapFactory(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMapFactory()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorMapFactory is not set.');
        }
        unset($this->Amyb9CatServiceDoctrineDBALConnectionDecoratorMapFactory);

        return $this;
    }
}

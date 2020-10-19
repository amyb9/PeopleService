<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\Map;

use Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceDoctrineDBALConnectionDecoratorMap;

    public function setDoctrineDBALConnectionDecoratorMap(MapInterface $doctrineDBALConnectionDecoratorMap): self
    {
        if ($this->hasDoctrineDBALConnectionDecoratorMap()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorMap is already set.');
        }
        $this->Amyb9CatServiceDoctrineDBALConnectionDecoratorMap = $doctrineDBALConnectionDecoratorMap;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorMap(): MapInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMap()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorMap is not set.');
        }

        return $this->Amyb9CatServiceDoctrineDBALConnectionDecoratorMap;
    }

    protected function hasDoctrineDBALConnectionDecoratorMap(): bool
    {
        return isset($this->Amyb9CatServiceDoctrineDBALConnectionDecoratorMap);
    }

    protected function unsetDoctrineDBALConnectionDecoratorMap(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMap()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecoratorMap is not set.');
        }
        unset($this->Amyb9CatServiceDoctrineDBALConnectionDecoratorMap);

        return $this;
    }
}

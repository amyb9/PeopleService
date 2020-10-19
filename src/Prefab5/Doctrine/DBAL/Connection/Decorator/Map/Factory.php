<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\Map;

use Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator\MapInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getDoctrineDBALConnectionDecoratorMap()->getArrayCopy();
    }
}

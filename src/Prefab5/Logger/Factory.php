<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Logger;

use Amyb9\CatService\Prefab5\LoggerInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create() : LoggerInterface
    {
        return clone $this->getPrefab5Logger();
    }
}

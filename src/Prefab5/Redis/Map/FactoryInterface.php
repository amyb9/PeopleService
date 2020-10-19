<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Redis\Map;

use Amyb9\CatService\Prefab5\Redis\MapInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): MapInterface;
}

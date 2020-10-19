<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Filter\Map;

use Amyb9\CatService\Prefab5\SearchCriteria\Filter\MapInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): MapInterface;
}

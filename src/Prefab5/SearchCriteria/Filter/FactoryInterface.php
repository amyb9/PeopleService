<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Filter;

use Amyb9\CatService\Prefab5\SearchCriteria\FilterInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): FilterInterface;
}

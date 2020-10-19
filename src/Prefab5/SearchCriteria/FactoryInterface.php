<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria;

use Amyb9\CatService\Prefab5\SearchCriteriaInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): SearchCriteriaInterface;
}

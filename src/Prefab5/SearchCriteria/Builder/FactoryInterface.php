<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Builder;

use Amyb9\CatService\Prefab5\SearchCriteria\BuilderInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): BuilderInterface;
}

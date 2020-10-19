<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Builder;

use Amyb9\CatService\Prefab5\SearchCriteria\BuilderInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getSearchCriteriaBuilder();
    }
}

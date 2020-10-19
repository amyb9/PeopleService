<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\SortOrder;

use Amyb9\CatService\Prefab5\SearchCriteria\SortOrderInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): SortOrderInterface
    {
        return clone $this->getSearchCriteriaSortOrder();
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Visitor\Map;

use Amyb9\CatService\Prefab5\SearchCriteria\Visitor\MapInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getSearchCriteriaVisitorMap()->getArrayCopy();
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria;

use Amyb9\CatService\Prefab5\SearchCriteriaInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): SearchCriteriaInterface
    {
        return clone $this->getSearchCriteria();
    }
}

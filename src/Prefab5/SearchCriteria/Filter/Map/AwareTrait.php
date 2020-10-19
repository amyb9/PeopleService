<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Filter\Map;

use Amyb9\CatService\Prefab5\SearchCriteria\Filter\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaFilterMap;

    public function setSearchCriteriaFilterMap(MapInterface $searchCriteriaFilterMap): self
    {
        if ($this->hasSearchCriteriaFilterMap()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilterMap is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaFilterMap = $searchCriteriaFilterMap;

        return $this;
    }

    protected function getSearchCriteriaFilterMap(): MapInterface
    {
        if (!$this->hasSearchCriteriaFilterMap()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilterMap is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaFilterMap;
    }

    protected function hasSearchCriteriaFilterMap(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaFilterMap);
    }

    protected function unsetSearchCriteriaFilterMap(): self
    {
        if (!$this->hasSearchCriteriaFilterMap()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilterMap is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaFilterMap);

        return $this;
    }
}

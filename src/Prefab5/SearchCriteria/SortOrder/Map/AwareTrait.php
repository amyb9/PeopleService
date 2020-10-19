<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\SortOrder\Map;

use Amyb9\CatService\Prefab5\SearchCriteria\SortOrder\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaSortOrderMap;

    public function setSearchCriteriaSortOrderMap(MapInterface $searchCriteriaSortOrderMap): self
    {
        if ($this->hasSearchCriteriaSortOrderMap()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrderMap is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaSortOrderMap = $searchCriteriaSortOrderMap;

        return $this;
    }

    protected function getSearchCriteriaSortOrderMap(): MapInterface
    {
        if (!$this->hasSearchCriteriaSortOrderMap()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrderMap is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaSortOrderMap;
    }

    protected function hasSearchCriteriaSortOrderMap(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaSortOrderMap);
    }

    protected function unsetSearchCriteriaSortOrderMap(): self
    {
        if (!$this->hasSearchCriteriaSortOrderMap()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrderMap is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaSortOrderMap);

        return $this;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Visitor\Map;

use Amyb9\CatService\Prefab5\SearchCriteria\Visitor\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaVisitorMap;

    public function setSearchCriteriaVisitorMap(MapInterface $searchCriteriaVisitorMap): self
    {
        if ($this->hasSearchCriteriaVisitorMap()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaVisitorMap is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaVisitorMap = $searchCriteriaVisitorMap;

        return $this;
    }

    protected function getSearchCriteriaVisitorMap(): MapInterface
    {
        if (!$this->hasSearchCriteriaVisitorMap()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaVisitorMap is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaVisitorMap;
    }

    protected function hasSearchCriteriaVisitorMap(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaVisitorMap);
    }

    protected function unsetSearchCriteriaVisitorMap(): self
    {
        if (!$this->hasSearchCriteriaVisitorMap()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaVisitorMap is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaVisitorMap);

        return $this;
    }
}

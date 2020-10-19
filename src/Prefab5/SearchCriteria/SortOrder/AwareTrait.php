<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\SortOrder;

use Amyb9\CatService\Prefab5\SearchCriteria\SortOrderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaSortOrder;

    public function setSearchCriteriaSortOrder(SortOrderInterface $searchCriteriaSortOrder): self
    {
        if ($this->hasSearchCriteriaSortOrder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrder is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaSortOrder = $searchCriteriaSortOrder;

        return $this;
    }

    protected function getSearchCriteriaSortOrder(): SortOrderInterface
    {
        if (!$this->hasSearchCriteriaSortOrder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrder is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaSortOrder;
    }

    protected function hasSearchCriteriaSortOrder(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaSortOrder);
    }

    protected function unsetSearchCriteriaSortOrder(): self
    {
        if (!$this->hasSearchCriteriaSortOrder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrder is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaSortOrder);

        return $this;
    }
}

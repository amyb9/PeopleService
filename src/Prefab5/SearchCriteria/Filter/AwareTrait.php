<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Filter;

use Amyb9\CatService\Prefab5\SearchCriteria\FilterInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaFilter;

    public function setSearchCriteriaFilter(FilterInterface $searchCriteriaFilter): self
    {
        if ($this->hasSearchCriteriaFilter()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilter is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaFilter = $searchCriteriaFilter;

        return $this;
    }

    protected function getSearchCriteriaFilter(): FilterInterface
    {
        if (!$this->hasSearchCriteriaFilter()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilter is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaFilter;
    }

    protected function hasSearchCriteriaFilter(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaFilter);
    }

    protected function unsetSearchCriteriaFilter(): self
    {
        if (!$this->hasSearchCriteriaFilter()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilter is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaFilter);

        return $this;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\SortOrder\Map\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\SortOrder\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaSortOrderMapFactory;

    public function setSearchCriteriaSortOrderMapFactory(FactoryInterface $searchCriteriaSortOrderMapFactory): self
    {
        if ($this->hasSearchCriteriaSortOrderMapFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrderMapFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaSortOrderMapFactory = $searchCriteriaSortOrderMapFactory;

        return $this;
    }

    protected function getSearchCriteriaSortOrderMapFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaSortOrderMapFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrderMapFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaSortOrderMapFactory;
    }

    protected function hasSearchCriteriaSortOrderMapFactory(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaSortOrderMapFactory);
    }

    protected function unsetSearchCriteriaSortOrderMapFactory(): self
    {
        if (!$this->hasSearchCriteriaSortOrderMapFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrderMapFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaSortOrderMapFactory);

        return $this;
    }
}

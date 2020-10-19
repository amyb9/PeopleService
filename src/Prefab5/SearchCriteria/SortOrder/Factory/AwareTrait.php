<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\SortOrder\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\SortOrder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaSortOrderFactory;

    public function setSearchCriteriaSortOrderFactory(FactoryInterface $searchCriteriaSortOrderFactory): self
    {
        if ($this->hasSearchCriteriaSortOrderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrderFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaSortOrderFactory = $searchCriteriaSortOrderFactory;

        return $this;
    }

    protected function getSearchCriteriaSortOrderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaSortOrderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrderFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaSortOrderFactory;
    }

    protected function hasSearchCriteriaSortOrderFactory(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaSortOrderFactory);
    }

    protected function unsetSearchCriteriaSortOrderFactory(): self
    {
        if (!$this->hasSearchCriteriaSortOrderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaSortOrderFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaSortOrderFactory);

        return $this;
    }
}

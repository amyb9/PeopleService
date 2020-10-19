<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria;

use Amyb9\CatService\Prefab5\SearchCriteriaInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteria;

    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria): self
    {
        if ($this->hasSearchCriteria()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteria is already set.');
        }
        $this->Amyb9CatServiceSearchCriteria = $searchCriteria;

        return $this;
    }

    protected function getSearchCriteria(): SearchCriteriaInterface
    {
        if (!$this->hasSearchCriteria()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteria is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteria;
    }

    protected function hasSearchCriteria(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteria);
    }

    protected function unsetSearchCriteria(): self
    {
        if (!$this->hasSearchCriteria()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteria is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteria);

        return $this;
    }
}

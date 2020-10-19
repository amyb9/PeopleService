<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Builder;

use Amyb9\CatService\Prefab5\SearchCriteria\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaBuilder;

    public function setSearchCriteriaBuilder(BuilderInterface $searchCriteriaBuilder): self
    {
        if ($this->hasSearchCriteriaBuilder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaBuilder is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaBuilder = $searchCriteriaBuilder;

        return $this;
    }

    protected function getSearchCriteriaBuilder(): BuilderInterface
    {
        if (!$this->hasSearchCriteriaBuilder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaBuilder is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaBuilder;
    }

    protected function hasSearchCriteriaBuilder(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaBuilder);
    }

    protected function unsetSearchCriteriaBuilder(): self
    {
        if (!$this->hasSearchCriteriaBuilder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaBuilder is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaBuilder);

        return $this;
    }
}

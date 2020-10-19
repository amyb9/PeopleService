<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Builder\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaBuilderFactory;

    public function setSearchCriteriaBuilderFactory(
        FactoryInterface $searchCriteriaBuilderFactory
    ): self {
        if ($this->hasSearchCriteriaBuilderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaBuilderFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaBuilderFactory = $searchCriteriaBuilderFactory;

        return $this;
    }

    protected function getSearchCriteriaBuilderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaBuilderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaBuilderFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaBuilderFactory;
    }

    protected function hasSearchCriteriaBuilderFactory(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaBuilderFactory);
    }

    protected function unsetSearchCriteriaBuilderFactory(): self
    {
        if (!$this->hasSearchCriteriaBuilderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaBuilderFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaBuilderFactory);

        return $this;
    }
}

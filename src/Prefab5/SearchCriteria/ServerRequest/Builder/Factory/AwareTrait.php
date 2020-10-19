<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\ServerRequest\Builder\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\ServerRequest\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaServerRequestBuilderFactory;

    public function setSearchCriteriaServerRequestBuilderFactory(
        FactoryInterface $searchCriteriaServerRequestBuilderFactory
    ): self {
        if ($this->hasSearchCriteriaServerRequestBuilderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaServerRequestBuilderFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaServerRequestBuilderFactory = $searchCriteriaServerRequestBuilderFactory;

        return $this;
    }

    protected function getSearchCriteriaServerRequestBuilderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaServerRequestBuilderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaServerRequestBuilderFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaServerRequestBuilderFactory;
    }

    protected function hasSearchCriteriaServerRequestBuilderFactory(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaServerRequestBuilderFactory);
    }

    protected function unsetSearchCriteriaServerRequestBuilderFactory(): self
    {
        if (!$this->hasSearchCriteriaServerRequestBuilderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaServerRequestBuilderFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaServerRequestBuilderFactory);

        return $this;
    }
}

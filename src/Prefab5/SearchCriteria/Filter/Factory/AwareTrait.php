<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Filter\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\Filter\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaFilterFactory;

    public function setSearchCriteriaFilterFactory(FactoryInterface $searchCriteriaFilterFactory): self
    {
        if ($this->hasSearchCriteriaFilterFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilterFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaFilterFactory = $searchCriteriaFilterFactory;

        return $this;
    }

    protected function getSearchCriteriaFilterFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaFilterFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilterFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaFilterFactory;
    }

    protected function hasSearchCriteriaFilterFactory(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaFilterFactory);
    }

    protected function unsetSearchCriteriaFilterFactory(): self
    {
        if (!$this->hasSearchCriteriaFilterFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilterFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaFilterFactory);

        return $this;
    }
}

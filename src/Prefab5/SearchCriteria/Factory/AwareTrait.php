<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaFactory;

    public function setSearchCriteriaFactory(FactoryInterface $searchCriteriaFactory): self
    {
        if ($this->hasSearchCriteriaFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaFactory = $searchCriteriaFactory;

        return $this;
    }

    protected function getSearchCriteriaFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaFactory;
    }

    protected function hasSearchCriteriaFactory(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaFactory);
    }

    protected function unsetSearchCriteriaFactory(): self
    {
        if (!$this->hasSearchCriteriaFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaFactory);

        return $this;
    }
}

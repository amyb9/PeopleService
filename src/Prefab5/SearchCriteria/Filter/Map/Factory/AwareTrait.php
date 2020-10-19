<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Filter\Map\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\Filter\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaFilterMapFactory;

    public function setSearchCriteriaFilterMapFactory(FactoryInterface $searchCriteriaFilterMapFactory): self
    {
        if ($this->hasSearchCriteriaFilterMapFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilterMapFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaFilterMapFactory = $searchCriteriaFilterMapFactory;

        return $this;
    }

    protected function getSearchCriteriaFilterMapFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaFilterMapFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilterMapFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaFilterMapFactory;
    }

    protected function hasSearchCriteriaFilterMapFactory(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaFilterMapFactory);
    }

    protected function unsetSearchCriteriaFilterMapFactory(): self
    {
        if (!$this->hasSearchCriteriaFilterMapFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaFilterMapFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaFilterMapFactory);

        return $this;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Visitor\Map\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\Visitor\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaVisitorMapFactory;

    public function setSearchCriteriaVisitorMapFactory(FactoryInterface $searchCriteriaVisitorMapFactory) : self
    {
        if ($this->hasSearchCriteriaVisitorMapFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaVisitorMapFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaVisitorMapFactory = $searchCriteriaVisitorMapFactory;

        return $this;
    }

    protected function getSearchCriteriaVisitorMapFactory() : FactoryInterface
    {
        if (!$this->hasSearchCriteriaVisitorMapFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaVisitorMapFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaVisitorMapFactory;
    }

    protected function hasSearchCriteriaVisitorMapFactory() : bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaVisitorMapFactory);
    }

    protected function unsetSearchCriteriaVisitorMapFactory() : self
    {
        if (!$this->hasSearchCriteriaVisitorMapFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaVisitorMapFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaVisitorMapFactory);

        return $this;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Visitor\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Visitor\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory(
        FactoryInterface $searchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory = $searchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory);

        return $this;
    }
}

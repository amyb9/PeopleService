<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\Factory;

use Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory(
        FactoryInterface $searchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory = $searchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory);

        return $this;
    }
}

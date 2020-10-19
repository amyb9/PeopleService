<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder;

use Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(
        BuilderInterface $searchCriteriaDoctrineDBALQueryQueryBuilderBuilder
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder = $searchCriteriaDoctrineDBALQueryQueryBuilderBuilder;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(): BuilderInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder);

        return $this;
    }
}

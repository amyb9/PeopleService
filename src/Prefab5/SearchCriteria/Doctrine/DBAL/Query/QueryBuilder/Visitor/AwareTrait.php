<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Visitor;

use Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\VisitorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(
        VisitorInterface $searchCriteriaDoctrineDBALQueryQueryBuilderVisitor
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor = $searchCriteriaDoctrineDBALQueryQueryBuilderVisitor;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(): VisitorInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor);

        return $this;
    }
}

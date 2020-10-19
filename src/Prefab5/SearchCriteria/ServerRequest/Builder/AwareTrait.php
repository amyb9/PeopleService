<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\ServerRequest\Builder;

use Amyb9\CatService\Prefab5\SearchCriteria\ServerRequest\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceSearchCriteriaServerRequestBuilder;

    public function setSearchCriteriaServerRequestBuilder(BuilderInterface $searchCriteriaServerRequestBuilder): self
    {
        if ($this->hasSearchCriteriaServerRequestBuilder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaServerRequestBuilder is already set.');
        }
        $this->Amyb9CatServiceSearchCriteriaServerRequestBuilder = $searchCriteriaServerRequestBuilder;

        return $this;
    }

    protected function getSearchCriteriaServerRequestBuilder(): BuilderInterface
    {
        if (!$this->hasSearchCriteriaServerRequestBuilder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaServerRequestBuilder is not set.');
        }

        return $this->Amyb9CatServiceSearchCriteriaServerRequestBuilder;
    }

    protected function hasSearchCriteriaServerRequestBuilder(): bool
    {
        return isset($this->Amyb9CatServiceSearchCriteriaServerRequestBuilder);
    }

    protected function unsetSearchCriteriaServerRequestBuilder(): self
    {
        if (!$this->hasSearchCriteriaServerRequestBuilder()) {
            throw new \LogicException('Amyb9CatServiceSearchCriteriaServerRequestBuilder is not set.');
        }
        unset($this->Amyb9CatServiceSearchCriteriaServerRequestBuilder);

        return $this;
    }
}

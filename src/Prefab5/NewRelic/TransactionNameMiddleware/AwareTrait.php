<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddleware;

use Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddlewareInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceNewRelicTransactionNameMiddleware;

    public function setNewRelicTransactionNameMiddleware(
        TransactionNameMiddlewareInterface $newRelicTransactionNameMiddleware
    ): self {
        if ($this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('Amyb9CatServiceNewRelicTransactionNameMiddleware is already set.');
        }
        $this->Amyb9CatServiceNewRelicTransactionNameMiddleware = $newRelicTransactionNameMiddleware;

        return $this;
    }

    protected function getNewRelicTransactionNameMiddleware(): TransactionNameMiddlewareInterface
    {
        if (!$this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('Amyb9CatServiceNewRelicTransactionNameMiddleware is not set.');
        }

        return $this->Amyb9CatServiceNewRelicTransactionNameMiddleware;
    }

    protected function hasNewRelicTransactionNameMiddleware(): bool
    {
        return isset($this->Amyb9CatServiceNewRelicTransactionNameMiddleware);
    }

    protected function unsetNewRelicTransactionNameMiddleware(): self
    {
        if (!$this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('Amyb9CatServiceNewRelicTransactionNameMiddleware is not set.');
        }
        unset($this->Amyb9CatServiceNewRelicTransactionNameMiddleware);

        return $this;
    }
}

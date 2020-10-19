<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddleware\Decorator;

use Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddleware\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceNewRelicTransactionNameMiddlewareDecorator;

    public function setNewRelicTransactionNameMiddlewareDecorator(
        DecoratorInterface $newRelicTransactionNameMiddlewareDecorator
    ): self {
        if ($this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('Amyb9CatServiceNewRelicTransactionNameMiddlewareDecorator is already set.');
        }
        $this->Amyb9CatServiceNewRelicTransactionNameMiddlewareDecorator = $newRelicTransactionNameMiddlewareDecorator;

        return $this;
    }

    protected function getNewRelicTransactionNameMiddlewareDecorator(): DecoratorInterface
    {
        if (!$this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('Amyb9CatServiceNewRelicTransactionNameMiddlewareDecorator is not set.');
        }

        return $this->Amyb9CatServiceNewRelicTransactionNameMiddlewareDecorator;
    }

    protected function hasNewRelicTransactionNameMiddlewareDecorator(): bool
    {
        return isset($this->Amyb9CatServiceNewRelicTransactionNameMiddlewareDecorator);
    }

    protected function unsetNewRelicTransactionNameMiddlewareDecorator(): self
    {
        if (!$this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('Amyb9CatServiceNewRelicTransactionNameMiddlewareDecorator is not set.');
        }
        unset($this->Amyb9CatServiceNewRelicTransactionNameMiddlewareDecorator);

        return $this;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Zend\ProblemDetails\ProblemDetailsMiddleware\Decorator;

use Amyb9\CatService\Prefab5\Zend\ProblemDetails\ProblemDetailsMiddleware\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceZendProblemDetailsProblemDetailsMiddlewareDecorator;

    public function setZendProblemDetailsProblemDetailsMiddlewareDecorator(
        DecoratorInterface $zendProblemDetailsProblemDetailsMiddlewareDecorator
    ): self {
        if ($this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('Amyb9CatServiceZendProblemDetailsProblemDetailsMiddlewareDecorator is already set.');
        }
        $this->Amyb9CatServiceZendProblemDetailsProblemDetailsMiddlewareDecorator = $zendProblemDetailsProblemDetailsMiddlewareDecorator;

        return $this;
    }

    protected function getZendProblemDetailsProblemDetailsMiddlewareDecorator(): DecoratorInterface
    {
        if (!$this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('Amyb9CatServiceZendProblemDetailsProblemDetailsMiddlewareDecorator is not set.');
        }

        return $this->Amyb9CatServiceZendProblemDetailsProblemDetailsMiddlewareDecorator;
    }

    protected function hasZendProblemDetailsProblemDetailsMiddlewareDecorator(): bool
    {
        return isset($this->Amyb9CatServiceZendProblemDetailsProblemDetailsMiddlewareDecorator);
    }

    protected function unsetZendProblemDetailsProblemDetailsMiddlewareDecorator(): self
    {
        if (!$this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('Amyb9CatServiceZendProblemDetailsProblemDetailsMiddlewareDecorator is not set.');
        }
        unset($this->Amyb9CatServiceZendProblemDetailsProblemDetailsMiddlewareDecorator);

        return $this;
    }
}

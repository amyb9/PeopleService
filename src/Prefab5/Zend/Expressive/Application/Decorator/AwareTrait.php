<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Zend\Expressive\Application\Decorator;

use Amyb9\CatService\Prefab5\Zend\Expressive\Application\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceZendExpressiveApplicationDecorator;

    public function setZendExpressiveApplicationDecorator(DecoratorInterface $zendExpressiveApplicationDecorator): self
    {
        if ($this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('Amyb9CatServiceZendExpressiveApplicationDecorator is already set.');
        }
        $this->Amyb9CatServiceZendExpressiveApplicationDecorator = $zendExpressiveApplicationDecorator;

        return $this;
    }

    protected function getZendExpressiveApplicationDecorator(): DecoratorInterface
    {
        if (!$this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('Amyb9CatServiceZendExpressiveApplicationDecorator is not set.');
        }

        return $this->Amyb9CatServiceZendExpressiveApplicationDecorator;
    }

    protected function hasZendExpressiveApplicationDecorator(): bool
    {
        return isset($this->Amyb9CatServiceZendExpressiveApplicationDecorator);
    }

    protected function unsetZendExpressiveApplicationDecorator(): self
    {
        if (!$this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('Amyb9CatServiceZendExpressiveApplicationDecorator is not set.');
        }
        unset($this->Amyb9CatServiceZendExpressiveApplicationDecorator);

        return $this;
    }
}

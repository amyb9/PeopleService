<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Protean\Container\Builder;

use Amyb9\CatService\Prefab5\Protean\Container\BuilderInterface;

trait AwareTrait
{
    protected $Amyb9CatServiceProteanContainerBuilder;

    public function setProteanContainerBuilder(BuilderInterface $proteanContainerBuilder): self
    {
        if ($this->hasProteanContainerBuilder()) {
            throw new \LogicException('Amyb9CatServiceProteanContainerBuilder is already set.');
        }
        $this->Amyb9CatServiceProteanContainerBuilder = $proteanContainerBuilder;

        return $this;
    }

    protected function getProteanContainerBuilder(): BuilderInterface
    {
        if (!$this->hasProteanContainerBuilder()) {
            throw new \LogicException('Amyb9CatServiceProteanContainerBuilder is not set.');
        }

        return $this->Amyb9CatServiceProteanContainerBuilder;
    }

    protected function hasProteanContainerBuilder(): bool
    {
        return isset($this->Amyb9CatServiceProteanContainerBuilder);
    }

    protected function unsetProteanContainerBuilder(): self
    {
        if (!$this->hasProteanContainerBuilder()) {
            throw new \LogicException('Amyb9CatServiceProteanContainerBuilder is not set.');
        }
        unset($this->Amyb9CatServiceProteanContainerBuilder);

        return $this;
    }
}

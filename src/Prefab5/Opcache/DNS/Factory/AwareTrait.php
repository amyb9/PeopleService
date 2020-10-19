<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Opcache\DNS\Factory;

use Amyb9\CatService\Prefab5\Opcache\DNS\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceOpcacheDNSFactory;

    public function setOpcacheDNSFactory(FactoryInterface $opcacheDNSFactory): self
    {
        if ($this->hasOpcacheDNSFactory()) {
            throw new \LogicException('Amyb9CatServiceOpcacheDNSFactory is already set.');
        }
        $this->Amyb9CatServiceOpcacheDNSFactory = $opcacheDNSFactory;

        return $this;
    }

    protected function getOpcacheDNSFactory(): FactoryInterface
    {
        if (!$this->hasOpcacheDNSFactory()) {
            throw new \LogicException('Amyb9CatServiceOpcacheDNSFactory is not set.');
        }

        return $this->Amyb9CatServiceOpcacheDNSFactory;
    }

    protected function hasOpcacheDNSFactory(): bool
    {
        return isset($this->Amyb9CatServiceOpcacheDNSFactory);
    }

    protected function unsetOpcacheDNSFactory(): self
    {
        if (!$this->hasOpcacheDNSFactory()) {
            throw new \LogicException('Amyb9CatServiceOpcacheDNSFactory is not set.');
        }
        unset($this->Amyb9CatServiceOpcacheDNSFactory);

        return $this;
    }
}

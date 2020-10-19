<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Opcache\DNS;

use Amyb9\CatService\Prefab5\Opcache\DNSInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceOpcacheDNS;

    public function setOpcacheDNS(DNSInterface $opcacheDNS): self
    {
        if ($this->hasOpcacheDNS()) {
            throw new \LogicException('Amyb9CatServiceOpcacheDNS is already set.');
        }
        $this->Amyb9CatServiceOpcacheDNS = $opcacheDNS;

        return $this;
    }

    protected function getOpcacheDNS(): DNSInterface
    {
        if (!$this->hasOpcacheDNS()) {
            throw new \LogicException('Amyb9CatServiceOpcacheDNS is not set.');
        }

        return $this->Amyb9CatServiceOpcacheDNS;
    }

    protected function hasOpcacheDNS(): bool
    {
        return isset($this->Amyb9CatServiceOpcacheDNS);
    }

    protected function unsetOpcacheDNS(): self
    {
        if (!$this->hasOpcacheDNS()) {
            throw new \LogicException('Amyb9CatServiceOpcacheDNS is not set.');
        }
        unset($this->Amyb9CatServiceOpcacheDNS);

        return $this;
    }
}

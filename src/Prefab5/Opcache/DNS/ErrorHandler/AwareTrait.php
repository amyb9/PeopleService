<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Opcache\DNS\ErrorHandler;

use Amyb9\CatService\Prefab5\Opcache\DNS\ErrorHandlerInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceOpcacheDNSErrorHandler;

    public function setOpcacheDNSErrorHandler(ErrorHandlerInterface $opcacheDNSErrorHandler): self
    {
        if ($this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('Amyb9CatServiceOpcacheDNSErrorHandler is already set.');
        }
        $this->Amyb9CatServiceOpcacheDNSErrorHandler = $opcacheDNSErrorHandler;

        return $this;
    }

    protected function getOpcacheDNSErrorHandler(): ErrorHandlerInterface
    {
        if (!$this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('Amyb9CatServiceOpcacheDNSErrorHandler is not set.');
        }

        return $this->Amyb9CatServiceOpcacheDNSErrorHandler;
    }

    protected function hasOpcacheDNSErrorHandler(): bool
    {
        return isset($this->Amyb9CatServiceOpcacheDNSErrorHandler);
    }

    protected function unsetOpcacheDNSErrorHandler(): self
    {
        if (!$this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('Amyb9CatServiceOpcacheDNSErrorHandler is not set.');
        }
        unset($this->Amyb9CatServiceOpcacheDNSErrorHandler);

        return $this;
    }
}

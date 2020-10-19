<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Opcache\DNS;

use Amyb9\CatService\Prefab5\Opcache\DNSInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): DNSInterface
    {
        return clone $this->getOpcacheDNS();
    }
}

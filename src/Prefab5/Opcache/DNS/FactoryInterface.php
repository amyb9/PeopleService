<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Opcache\DNS;

use Amyb9\CatService\Prefab5\Opcache\DNSInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): DNSInterface;
}

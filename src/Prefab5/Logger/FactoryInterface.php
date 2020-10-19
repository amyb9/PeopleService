<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Logger;

use Amyb9\CatService\Prefab5\LoggerInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create() : LoggerInterface;
}

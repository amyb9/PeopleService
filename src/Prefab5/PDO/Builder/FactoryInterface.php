<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\PDO\Builder;

use Amyb9\CatService\Prefab5\PDO\BuilderInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): BuilderInterface;
}

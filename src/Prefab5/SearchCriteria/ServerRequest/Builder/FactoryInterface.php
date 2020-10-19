<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\ServerRequest\Builder;

use Amyb9\CatService\Prefab5\SearchCriteria\ServerRequest\BuilderInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): BuilderInterface;
}

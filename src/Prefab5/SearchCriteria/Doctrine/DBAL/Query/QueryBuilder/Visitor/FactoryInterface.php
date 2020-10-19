<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Visitor;

use Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\VisitorInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): VisitorInterface;
}

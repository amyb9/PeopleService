<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder;

use Doctrine\DBAL\Query\QueryBuilder;
use Amyb9\CatService\Prefab5\SearchCriteria;

interface VisitorInterface extends SearchCriteria\VisitorInterface
{
    public function getQueryBuilder(): QueryBuilder;
}

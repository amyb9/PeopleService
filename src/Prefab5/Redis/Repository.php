<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Redis;

use Amyb9\CatService\Prefab5\Redis;

class Repository implements RepositoryInterface
{
    use Redis\Factory\AwareTrait;
    use Redis\Map\AwareTrait;

    public function get(string $id): \Redis
    {
        if (!isset($this->getRedisMap()[$id])) {
            $this->getRedisMap()[$id] = $this->getRedisFactory()->create();
        }

        return $this->getRedisMap()[$id];
    }
}

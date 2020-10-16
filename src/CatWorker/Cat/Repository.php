<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker\Cat;

use Amyb9\CatService\CatWorker\CatInterface;

class Repository implements RepositoryInterface
{
    // Create
    public function add(CatInterface $cat): RepositoryInterface
    {
        throw new \LogicException('Unimplemented add method.');
        return $this;
    }

    // Read
    public function getById(): RepositoryInterface
    {
        throw new \LogicException('Unimplemented get by ID method.');
        return $this;
    }

    // Update
    public function update(CatInterface $cat): RepositoryInterface
    {
        throw new \LogicException('Unimplemented update method.');
        return $this;
    }

    // Delete
    public function deleteById(int $id): RepositoryInterface
    {
        throw new \LogicException('Unimplemented delete method.');
        return $this;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\HTTPBuildableDirectoryMap\ContainerBuilder;

interface PrimerInterface
{
    public function primeContainers() : PrimerInterface;
}

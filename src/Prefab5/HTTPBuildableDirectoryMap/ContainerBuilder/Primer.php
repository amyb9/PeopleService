<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\HTTPBuildableDirectoryMap\ContainerBuilder;

use Amyb9\CatService\Prefab5\Opcache;
use Amyb9\CatService\Prefab5\Opcache\HTTPBuildableDirectoryMap\BuildableDirectoryFileNotFound;
use Amyb9\CatService\Prefab5\HTTPBuildableDirectoryMap\ContainerBuilder;
use Amyb9\CatService\Prefab5\Protean\Container\Builder;

class Primer implements PrimerInterface
{
    public function primeContainers() : PrimerInterface
    {
        try {
            $httpBuildableDirectoryMap = (new Opcache\HTTPBuildableDirectoryMap())->getBuildableDirectoryMap();
        } catch (BuildableDirectoryFileNotFound\Exception $exception) {
            // No directory map file found. Nothing to build
            return $this;
        }

        foreach ($httpBuildableDirectoryMap as $key => $values) {
            $proteanContainerBuilder = new Builder();
            $proteanContainerBuilder->getFilesystemProperties()->setRootDirectoryPath(__DIR__ . '/../../../../');

            $containerBuilder = (new ContainerBuilder())
                ->setProteanContainerBuilder($proteanContainerBuilder)
                ->setDirectoryGroup($key)
                ->setBuildableDirectoryMap([$key => $values])
                ->getContainerBuilder();

            $containerBuilder->build();
        }

        return $this;
    }
}

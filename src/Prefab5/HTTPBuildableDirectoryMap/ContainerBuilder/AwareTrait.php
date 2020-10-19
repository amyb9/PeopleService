<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\HTTPBuildableDirectoryMap\ContainerBuilder;

use Amyb9\CatService\Prefab5\HTTPBuildableDirectoryMap\ContainerBuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServicePrefab5HTTPBuildableDirectoryMapContainerBuilder;

    public function setPrefab5HTTPBuildableDirectoryMapContainerBuilder(ContainerBuilderInterface $prefab5HTTPBuildableDirectoryMapContainerBuilder) : self
    {
        if ($this->hasPrefab5HTTPBuildableDirectoryMapContainerBuilder()) {
            throw new \LogicException('Amyb9CatServicePrefab5HTTPBuildableDirectoryMapContainerBuilder is already set.');
        }
        $this->Amyb9CatServicePrefab5HTTPBuildableDirectoryMapContainerBuilder = $prefab5HTTPBuildableDirectoryMapContainerBuilder;

        return $this;
    }

    protected function getPrefab5HTTPBuildableDirectoryMapContainerBuilder() : ContainerBuilderInterface
    {
        if (!$this->hasPrefab5HTTPBuildableDirectoryMapContainerBuilder()) {
            throw new \LogicException('Amyb9CatServicePrefab5HTTPBuildableDirectoryMapContainerBuilder is not set.');
        }

        return $this->Amyb9CatServicePrefab5HTTPBuildableDirectoryMapContainerBuilder;
    }

    protected function hasPrefab5HTTPBuildableDirectoryMapContainerBuilder() : bool
    {
        return isset($this->Amyb9CatServicePrefab5HTTPBuildableDirectoryMapContainerBuilder);
    }

    protected function unsetPrefab5HTTPBuildableDirectoryMapContainerBuilder() : self
    {
        if (!$this->hasPrefab5HTTPBuildableDirectoryMapContainerBuilder()) {
            throw new \LogicException('Amyb9CatServicePrefab5HTTPBuildableDirectoryMapContainerBuilder is not set.');
        }
        unset($this->Amyb9CatServicePrefab5HTTPBuildableDirectoryMapContainerBuilder);

        return $this;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Opcache\HTTPBuildableDirectoryMap;

use Amyb9\CatService\Prefab5\Opcache\HTTPBuildableDirectoryMapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServicePrefab5OpcacheHTTPBuildableDirectoryMap;

    public function setPrefab5OpcacheHTTPBuildableDirectoryMap(HTTPBuildableDirectoryMapInterface $prefab5OpcacheHTTPBuildableDirectoryMap) : self
    {
        if ($this->hasPrefab5OpcacheHTTPBuildableDirectoryMap()) {
            throw new \LogicException('Amyb9CatServicePrefab5OpcacheHTTPBuildableDirectoryMap is already set.');
        }
        $this->Amyb9CatServicePrefab5OpcacheHTTPBuildableDirectoryMap = $prefab5OpcacheHTTPBuildableDirectoryMap;

        return $this;
    }

    protected function getPrefab5OpcacheHTTPBuildableDirectoryMap() : HTTPBuildableDirectoryMapInterface
    {
        if (!$this->hasPrefab5OpcacheHTTPBuildableDirectoryMap()) {
            throw new \LogicException('Amyb9CatServicePrefab5OpcacheHTTPBuildableDirectoryMap is not set.');
        }

        return $this->Amyb9CatServicePrefab5OpcacheHTTPBuildableDirectoryMap;
    }

    protected function hasPrefab5OpcacheHTTPBuildableDirectoryMap() : bool
    {
        return isset($this->Amyb9CatServicePrefab5OpcacheHTTPBuildableDirectoryMap);
    }

    protected function unsetPrefab5OpcacheHTTPBuildableDirectoryMap() : self
    {
        if (!$this->hasPrefab5OpcacheHTTPBuildableDirectoryMap()) {
            throw new \LogicException('Amyb9CatServicePrefab5OpcacheHTTPBuildableDirectoryMap is not set.');
        }
        unset($this->Amyb9CatServicePrefab5OpcacheHTTPBuildableDirectoryMap);

        return $this;
    }
}

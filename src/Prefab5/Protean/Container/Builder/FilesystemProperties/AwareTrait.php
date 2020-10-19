<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Protean\Container\Builder\FilesystemProperties;

use Amyb9\CatService\Prefab5\Protean\Container\Builder\FilesystemPropertiesInterface;

trait AwareTrait
{
    protected $Amyb9CatServiceProteanContainerBuilderFilesystemProperties;

    public function setProteanContainerBuilderFilesystemProperties(FilesystemPropertiesInterface $proteanContainerBuilderFilesystemProperties): self
    {
        if ($this->hasProteanContainerBuilderFilesystemProperties()) {
            throw new \LogicException('Amyb9CatServiceProteanContainerBuilderFilesystemProperties is already set.');
        }
        $this->Amyb9CatServiceProteanContainerBuilderFilesystemProperties = $proteanContainerBuilderFilesystemProperties;

        return $this;
    }

    protected function getProteanContainerBuilderFilesystemProperties(): FilesystemPropertiesInterface
    {
        if (!$this->hasProteanContainerBuilderFilesystemProperties()) {
            throw new \LogicException('Amyb9CatServiceProteanContainerBuilderFilesystemProperties is not set.');
        }

        return $this->Amyb9CatServiceProteanContainerBuilderFilesystemProperties;
    }

    protected function hasProteanContainerBuilderFilesystemProperties(): bool
    {
        return isset($this->Amyb9CatServiceProteanContainerBuilderFilesystemProperties);
    }

    protected function unsetProteanContainerBuilderFilesystemProperties(): self
    {
        if (!$this->hasProteanContainerBuilderFilesystemProperties()) {
            throw new \LogicException('Amyb9CatServiceProteanContainerBuilderFilesystemProperties is not set.');
        }
        unset($this->Amyb9CatServiceProteanContainerBuilderFilesystemProperties);

        return $this;
    }
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Logger\Factory;

use Amyb9\CatService\Prefab5\Logger\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServicePrefab5LoggerFactory;

    public function setPrefab5LoggerFactory(FactoryInterface $prefab5LoggerFactory) : self
    {
        if ($this->hasPrefab5LoggerFactory()) {
            throw new \LogicException('Amyb9CatServicePrefab5LoggerFactory is already set.');
        }
        $this->Amyb9CatServicePrefab5LoggerFactory = $prefab5LoggerFactory;

        return $this;
    }

    protected function getPrefab5LoggerFactory() : FactoryInterface
    {
        if (!$this->hasPrefab5LoggerFactory()) {
            throw new \LogicException('Amyb9CatServicePrefab5LoggerFactory is not set.');
        }

        return $this->Amyb9CatServicePrefab5LoggerFactory;
    }

    protected function hasPrefab5LoggerFactory() : bool
    {
        return isset($this->Amyb9CatServicePrefab5LoggerFactory);
    }

    protected function unsetPrefab5LoggerFactory() : self
    {
        if (!$this->hasPrefab5LoggerFactory()) {
            throw new \LogicException('Amyb9CatServicePrefab5LoggerFactory is not set.');
        }
        unset($this->Amyb9CatServicePrefab5LoggerFactory);

        return $this;
    }
}

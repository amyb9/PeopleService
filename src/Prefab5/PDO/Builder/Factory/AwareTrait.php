<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\PDO\Builder\Factory;

use Amyb9\CatService\Prefab5\PDO\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServicePDOBuilderFactory;

    public function setPDOBuilderFactory(FactoryInterface $pDOBuilderFactory): self
    {
        if ($this->hasPDOBuilderFactory()) {
            throw new \LogicException('Amyb9CatServicePDOBuilderFactory is already set.');
        }
        $this->Amyb9CatServicePDOBuilderFactory = $pDOBuilderFactory;

        return $this;
    }

    protected function getPDOBuilderFactory(): FactoryInterface
    {
        if (!$this->hasPDOBuilderFactory()) {
            throw new \LogicException('Amyb9CatServicePDOBuilderFactory is not set.');
        }

        return $this->Amyb9CatServicePDOBuilderFactory;
    }

    protected function hasPDOBuilderFactory(): bool
    {
        return isset($this->Amyb9CatServicePDOBuilderFactory);
    }

    protected function unsetPDOBuilderFactory(): self
    {
        if (!$this->hasPDOBuilderFactory()) {
            throw new \LogicException('Amyb9CatServicePDOBuilderFactory is not set.');
        }
        unset($this->Amyb9CatServicePDOBuilderFactory);

        return $this;
    }
}

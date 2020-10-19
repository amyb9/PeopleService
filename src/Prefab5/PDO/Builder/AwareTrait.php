<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\PDO\Builder;

use Amyb9\CatService\Prefab5\PDO\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServicePDOBuilder;

    public function setPDOBuilder(BuilderInterface $pDOBuilder): self
    {
        if ($this->hasPDOBuilder()) {
            throw new \LogicException('Amyb9CatServicePDOBuilder is already set.');
        }
        $this->Amyb9CatServicePDOBuilder = $pDOBuilder;

        return $this;
    }

    protected function getPDOBuilder(): BuilderInterface
    {
        if (!$this->hasPDOBuilder()) {
            throw new \LogicException('Amyb9CatServicePDOBuilder is not set.');
        }

        return $this->Amyb9CatServicePDOBuilder;
    }

    protected function hasPDOBuilder(): bool
    {
        return isset($this->Amyb9CatServicePDOBuilder);
    }

    protected function unsetPDOBuilder(): self
    {
        if (!$this->hasPDOBuilder()) {
            throw new \LogicException('Amyb9CatServicePDOBuilder is not set.');
        }
        unset($this->Amyb9CatServicePDOBuilder);

        return $this;
    }
}

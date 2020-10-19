<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\Decorator;

use Amyb9\CatService\Prefab5\Doctrine\DBAL\Connection\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $Amyb9CatServiceDoctrineDBALConnectionDecorator;

    public function setDoctrineDBALConnectionDecorator(DecoratorInterface $doctrineDBALConnectionDecorator): self
    {
        if ($this->hasDoctrineDBALConnectionDecorator()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecorator is already set.');
        }
        $this->Amyb9CatServiceDoctrineDBALConnectionDecorator = $doctrineDBALConnectionDecorator;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecorator(): DecoratorInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecorator()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecorator is not set.');
        }

        return $this->Amyb9CatServiceDoctrineDBALConnectionDecorator;
    }

    protected function hasDoctrineDBALConnectionDecorator(): bool
    {
        return isset($this->Amyb9CatServiceDoctrineDBALConnectionDecorator);
    }

    protected function unsetDoctrineDBALConnectionDecorator(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecorator()) {
            throw new \LogicException('Amyb9CatServiceDoctrineDBALConnectionDecorator is not set.');
        }
        unset($this->Amyb9CatServiceDoctrineDBALConnectionDecorator);

        return $this;
    }
}

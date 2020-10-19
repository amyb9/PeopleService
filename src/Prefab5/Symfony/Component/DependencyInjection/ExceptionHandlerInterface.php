<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Symfony\Component\DependencyInjection;

/**
 * @deprecated
 * @see \Amyb9\CatService\Prefab5\ExceptionHandlerInterface
 */
interface ExceptionHandlerInterface
{
    public function __invoke(\Throwable $throwable): ExceptionHandlerInterface;
}

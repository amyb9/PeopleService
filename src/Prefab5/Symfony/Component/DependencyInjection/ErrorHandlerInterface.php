<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Symfony\Component\DependencyInjection;

/**
 * @deprecated
 * @see \Amyb9\CatService\Prefab5\ErrorHandlerInterface
 */
interface ErrorHandlerInterface
{
    public function __invoke(
        int $errorNumber,
        string $errorString,
        string $errorFile,
        int $errorLine,
        array $errorContext
    );
}

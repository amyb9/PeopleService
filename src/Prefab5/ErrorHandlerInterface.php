<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5;

interface ErrorHandlerInterface
{
    public function __invoke(
        int $errorNumber,
        string $errorString,
        string $errorFile,
        int $errorLine
    );
}

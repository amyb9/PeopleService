<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5;

interface ExceptionHandlerInterface
{
    public function __invoke(\Throwable $throwable): void;
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Zend\ProblemDetails\ProblemDetailsMiddleware;

use Psr\Http\Server\MiddlewareInterface;

interface DecoratorInterface extends MiddlewareInterface
{
    public function attachListener(callable $listener): void;
}

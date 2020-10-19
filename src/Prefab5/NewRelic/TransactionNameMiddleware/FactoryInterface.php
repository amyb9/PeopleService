<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddleware;

use Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddlewareInterface;
use Symfony\Component\DependencyInjection\Container;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function __invoke(Container $container, string $requestedName): TransactionNameMiddlewareInterface;

    public function create(): TransactionNameMiddlewareInterface;
}

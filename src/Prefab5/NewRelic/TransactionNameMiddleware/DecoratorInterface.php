<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddleware;

use Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddlewareInterface;
use Amyb9\CatService\Prefab5\NewRelicInterface;

interface DecoratorInterface extends TransactionNameMiddlewareInterface
{
    public function setNewRelic(NewRelicInterface $newRelic);
}

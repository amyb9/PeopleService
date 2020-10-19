<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\NewRelic;

use Amyb9\CatService\Prefab5\NewRelicInterface;
use Psr\Http\Server\MiddlewareInterface;

interface TransactionNameMiddlewareInterface extends MiddlewareInterface
{
    public function setApplicationName(string $application_name): TransactionNameMiddlewareInterface;

    public function setNewRelic(NewRelicInterface $newRelic);
}

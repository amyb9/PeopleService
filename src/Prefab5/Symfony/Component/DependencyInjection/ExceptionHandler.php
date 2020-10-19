<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Symfony\Component\DependencyInjection;

use Amyb9\CatService\Prefab5\NewRelic;

/**
 * @deprecated
 * @see \Amyb9\CatService\Prefab5\ExceptionHandler
 */
class ExceptionHandler implements ExceptionHandlerInterface
{
    public function __invoke(\Throwable $throwable): ExceptionHandlerInterface
    {
        $newRelic = new NewRelic();
        if ($newRelic->isExtensionLoaded()) {
            $newRelic->noticeThrowable($throwable);
        } else {
            fwrite(STDERR, $throwable->__toString() . PHP_EOL);
        }

        return $this;
    }
}

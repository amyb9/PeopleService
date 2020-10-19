<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\Zend\ProblemDetails\ProblemDetailsMiddleware\NewRelic;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Amyb9\CatService\Prefab5\NewRelic;

class Listener implements ListenerInterface
{
    use NewRelic\AwareTrait;

    public function __invoke(
        \Throwable $throwable,
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ListenerInterface {
        $this->getNewRelic()->noticeThrowable($throwable);

        return $this;
    }
}

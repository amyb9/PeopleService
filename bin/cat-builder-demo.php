#!/usr/bin/env php
<?php
declare(strict_types=1);

use Amyb9\CatService\CatWorker\Cat\BuilderInterface;
use Amyb9\CatService\Prefab5\ExceptionHandler;
use Amyb9\CatService\Prefab5\Logger;
use Amyb9\CatService\Prefab5\Protean\Container\Builder;
use Amyb9\CatService\Prefab5\Opcache\DNS\ErrorHandler;
use Psr\Container\ContainerInterface;

// Setup PHP to be strict, autoload, etc.
bootstrap();
// Get a fully built Dependency Injection Container.
$dependencyInjectionContainer = getContainer();

// Retrieve the only public service which is the Cat Builder (that we enabled in "getContainer").
$catBuilder = $dependencyInjectionContainer->get(BuilderInterface::class);
$cat = $catBuilder->setRecord(
    [
        'EyeColor' => 'green',
        'Tail.LengthInInches' => 10,
        'Claw.IsSharp' => true,
        'Claw.State' => 'extended',
        'Claw.Color' => 'black',
    ]
)->build();

return;

function getContainer(): ContainerInterface
{
    // Instantiate a new Protean (Neighborhoods) Container Builder.
    $proteanContainerBuilder = (new Builder());
    // This is to turn off some unnecessary HTTP logic.
    $proteanContainerBuilder->setCanBuildZendExpressive(false);
    // Sets the name of the built container. This will be the name of the file if cached.
    $proteanContainerBuilder->setContainerName('CatService');
    // Look for DI (*.service.yml) files in this directory under src.
    $proteanContainerBuilder->getDiscoverableDirectories()->addDirectoryPathFilter('CatWorker');
    // This is where src is located.
    $proteanContainerBuilder->getFilesystemProperties()->setRootDirectoryPath(realpath(dirname(__DIR__)));
    // All Actors are non-public in the container by default, we turn one and ony one on to use.
    $proteanContainerBuilder->registerServiceAsPublic(BuilderInterface::class);

    // Build the container.
    return $proteanContainerBuilder->build();
}

function bootstrap()
{
    error_reporting(E_ALL);

    require_once __DIR__ . '/../vendor/autoload.php';
    $logger = (new Logger())->setLogFilePath(__DIR__ . '/../Logs/HTTP.log');
    $exceptionHandler = (new ExceptionHandler())->setPrefab5Logger($logger);

    set_exception_handler($exceptionHandler);
    set_error_handler(new ErrorHandler());
}

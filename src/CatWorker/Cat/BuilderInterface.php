<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker\Cat;

use Amyb9\CatService\CatWorker\CatInterface;
use Amyb9\CatService\CatWorker\Tail\Builder\FactoryInterface;

interface BuilderInterface
{
    public function build(): CatInterface;

    public function setRecord(array $record): BuilderInterface;

    public function setCatWorkerTailBuilderFactory(FactoryInterface $TailBuilderFactory);

    public function setCatWorkerClawBuilderFactory(
        \Amyb9\CatService\CatWorker\Claw\Builder\FactoryInterface $ClawBuilderFactory
    );

}

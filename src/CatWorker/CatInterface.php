<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker;

interface CatInterface
{
    public function meow(): CatInterface;
}

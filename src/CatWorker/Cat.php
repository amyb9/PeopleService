<?php
declare(strict_types=1);

namespace Amyb9\CatService\CatWorker;

class Cat implements CatInterface
{
    public function meow(): CatInterface
    {
        echo "meow world!\n";
        return $this;
    }
}

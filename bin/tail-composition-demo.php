#!/usr/bin/env php
<?php
declare(strict_types=1);

use Amyb9\CatService\CatWorker\Cat;
use Amyb9\CatService\CatWorker\Tail;

error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

$cat = new Cat();
$tail = new Tail();
$catRepository = new Cat\Repository();

$cat->setTail($tail);
$tail->setLengthInInches(7);
$catRepository->add($cat);

return;

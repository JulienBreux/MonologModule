<?php

date_default_timezone_set('UTC');

$loader = require __DIR__ . "/../vendor/autoload.php";
$loader->addPsr4('MonologModule\\', __DIR__.'/MonologModule');

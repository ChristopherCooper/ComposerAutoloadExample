<?php

/** @var Composer\Autoload\ClassLoader $autoload */
$autoload = require_once __DIR__.'/vendor/autoload.php';
$autoload->addPsr4('\\Carbon', __DIR__.'/src/Carbon');

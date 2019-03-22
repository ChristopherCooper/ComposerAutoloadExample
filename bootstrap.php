<?php

if (getenv('ENV') === 'local') {
    require_once __DIR__.'/autoload.dev.php';
} else {
    require_once __DIR__.'/vendor/autoload.php';
}

$carbon = new \Carbon\Carbon();

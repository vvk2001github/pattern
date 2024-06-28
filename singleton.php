<?php

declare(strict_types=1);

use Kulyaginv\Patterns\Singleton\Singleton;

require 'vendor/autoload.php';

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

if ($s1 === $s2) {
    echo "Singleton works" . PHP_EOL;
} else {
    echo "Singleton fail" . PHP_EOL;
}
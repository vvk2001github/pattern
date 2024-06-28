<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Singleton;

use Exception;

class Singleton
{
    private static Singleton $instance;

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup() 
    {
        throw new Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
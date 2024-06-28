<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Singleton;

class Logger extends RealSingleton
{
    private $fileHandle;

    protected function __construct()
    {
        $this->fileHandle = fopen('php://stdout', 'w');
    }

    public function writeLog(string $message): void
    {
        $date = date('Y-m-d');
        fwrite($this->fileHandle, "$date: $message\n");
    }

    public static function log(string $message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}
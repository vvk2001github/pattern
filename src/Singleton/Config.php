<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Singleton;

class Config extends RealSingleton
{
    private $hashmap = [];

    public function getValue(string $key): string
    {
        return $this->hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}
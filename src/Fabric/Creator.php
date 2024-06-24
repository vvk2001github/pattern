<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Fabric;

use Kulyaginv\Patterns\Interfaces\Fabric\Phone;

abstract class Creator
{
    abstract public function factoryMethod(): Phone;

    public function someOperation(): string
    {
        return $this->factoryMethod()->call();
    }
}
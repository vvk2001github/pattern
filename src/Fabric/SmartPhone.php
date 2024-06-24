<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Fabric;

use Kulyaginv\Patterns\Interfaces\Fabric\Phone;

class SmartPhone implements Phone
{
    public function call(): string
    {
        return "I am a SmartPhone";
    }
}
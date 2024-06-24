<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Fabric;
use Kulyaginv\Patterns\Fabric\Creator;
use Kulyaginv\Patterns\Interfaces\Fabric\Phone;

class CellPhoneCreator extends Creator
{
    public function factoryMethod(): Phone
    {
        return new CellPhone();
    }
}
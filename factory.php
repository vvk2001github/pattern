<?php

use Kulyaginv\Patterns\Fabric\CellPhoneCreator;
use Kulyaginv\Patterns\Fabric\Creator;
use Kulyaginv\Patterns\Fabric\SmartPhoneCreator;

require 'vendor/autoload.php';

function client(Creator $creator): void
{
    echo $creator->someOperation() . "\n";
}

client(new SmartPhoneCreator());
client(new CellPhoneCreator());
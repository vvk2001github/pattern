<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Interfaces\AbstractFactory;

interface PageTemplate
{
    public function getTemplateString(): string;
}
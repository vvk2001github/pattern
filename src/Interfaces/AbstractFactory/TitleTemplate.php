<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Interfaces\AbstractFactory;

interface TitleTemplate
{
    public function getTemplateString(): string;
}
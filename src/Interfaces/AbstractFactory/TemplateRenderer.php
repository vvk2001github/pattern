<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Interfaces\AbstractFactory;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}
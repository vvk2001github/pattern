<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory\PhpTemplate;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TemplateRenderer;

class PHPTemplateRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return "PHP Renderer {$templateString}" . PHP_EOL;
    }
}
<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory\Twig;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TemplateRenderer;

class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return "Twig Renderer {$templateString}" . PHP_EOL;
    }
}
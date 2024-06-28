<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory\Twig;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TitleTemplate;

class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>Twig Title Template</h1>" . PHP_EOL;
    }
}
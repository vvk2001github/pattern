<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory\PhpTemplate;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TitleTemplate;

class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>PHP Title Template</h1>" . PHP_EOL;
    }
}
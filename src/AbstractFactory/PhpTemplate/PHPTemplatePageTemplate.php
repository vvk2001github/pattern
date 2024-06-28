<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory\PhpTemplate;

use Kulyaginv\Patterns\AbstractFactory\BasePageTemplate;

class PHPTemplatePageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return "PHP Page Template {$renderedTitle}" . PHP_EOL;
    }
}
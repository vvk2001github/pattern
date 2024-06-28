<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory\Twig;
use Kulyaginv\Patterns\AbstractFactory\BasePageTemplate;

class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return "Twig Title Template {$renderedTitle}" . PHP_EOL;
    }
}
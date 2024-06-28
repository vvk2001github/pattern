<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory\PhpTemplate;

use Kulyaginv\Patterns\Interfaces\AbstractFactory\PageTemplate;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TemplateFactory;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TemplateRenderer;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TitleTemplate;

class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory\Twig;

use Kulyaginv\Patterns\Interfaces\AbstractFactory\PageTemplate;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TemplateFactory;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TemplateRenderer;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TitleTemplate;

class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}
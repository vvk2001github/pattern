<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Interfaces\AbstractFactory;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}
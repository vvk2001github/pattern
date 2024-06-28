<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory;

use Kulyaginv\Patterns\Interfaces\AbstractFactory\TemplateFactory;

class Page
{
    public string $title;

    public string $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}
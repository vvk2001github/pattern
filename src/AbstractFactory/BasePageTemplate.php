<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\AbstractFactory;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\PageTemplate;
use Kulyaginv\Patterns\Interfaces\AbstractFactory\TitleTemplate;

abstract class BasePageTemplate implements PageTemplate
{
    protected TitleTemplate $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}
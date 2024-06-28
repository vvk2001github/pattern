<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Observer;

class User
{
    public array $attributes = [];

    public function update(array $data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }
}
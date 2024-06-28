<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Observer;

use SplObserver;
use SplSubject;

class OnboardingNotification implements SplObserver
{
    private string $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function update(SplSubject $repository): void
    {

        echo "OnboardingNotification: The notification has been emailed!\n";
    }
}
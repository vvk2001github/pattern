<?php

declare(strict_types=1);

namespace Kulyaginv\Patterns\Observer;

use SplObserver;
use SplSubject;

class UserRepository implements SplSubject
{
    private array $users = [];

    private array $observers = [];

    public function __construct()
    {
        $this->observers["*"] = [];
    }

    private function initEventGroup(string $event = "*"): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers(string $event = "*"): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers["*"];

        return array_merge($group, $all);
    }

    public function attach(SplObserver $observer, string $event = "*"): void
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }

    public function detach(SplObserver $observer, string $event = "*"): void
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = "*", mixed $data = null): void
    {
        echo "UserRepository: Broadcasting the '$event' event.\n";
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($this, $event, $data);
        }
    }

    public function initialize(string $filename): void
    {
        echo "UserRepository: Loading user records from a file.\n";
        $this->notify("users:init", $filename);
    }

    public function createUser(array $data): User
    {
        echo "UserRepository: Creating a user.\n";

        $user = new User();

        $user->update($data);

        $id = bin2hex(openssl_random_pseudo_bytes(16));
        $user->update(["id" => $id]);
        $this->users[$id] = $user;

        $this->notify("users:created", $user);

        return $user;
    }

    public function deleteUser(User $user): void
    {
        echo "UserRepository: Deleting a user.\n";

        $id = $user->attributes["id"];
        if (!isset($this->users[$id])) {
            return;
        }

        unset($this->users[$id]);

        $this->notify("users:deleted", $user);
    }
}
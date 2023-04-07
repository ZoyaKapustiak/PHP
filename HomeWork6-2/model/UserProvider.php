<?php

include 'User.php';
class UserProvider
{
    private array $accounts = [
        'admin' => '123'
    ];

    public function getByUsernameAndPassword(string $userName, string $userPassword): ?User
    {
        $expectedPassword = $this->accounts[$userName] ?? null;
        if ($expectedPassword === $userPassword) {
            return new User($userName);
        }
        return null;
    }
}

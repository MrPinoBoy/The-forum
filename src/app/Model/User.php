<?php

declare(strict_types=1); //on force les variables à être d'un seul type spécifique

class User
{

    public string $username;
    public string $email;
    public string $password;
    public ?string $avatar;
    public ?string $signature;

    public function __construct(string $username, string $email, string $password, ?string $avatar, ?string $signature) 
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
        $this->signature = $signature;
    }

}
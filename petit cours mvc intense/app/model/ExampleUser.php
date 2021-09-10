<?php

declare(strict_types = 1);

require_once "../app/libraries/DatabaseManager.php";

class User extends DatabaseManager {

    public function __construct(string $username, string $email, string $password, ?string $avatar, ?string $signature) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
        $this->signature = $signature;
    }

    public function createUser() {
        $db = $this->connectDb();
        $db->prepare('INSERT INTO users (nickname,email,password,avatar,signature) VALUES (?,?,?,?,?)')->execute([$this->username,$this->email,$this->password,$this->avatar,$this->signature]);
    }
}
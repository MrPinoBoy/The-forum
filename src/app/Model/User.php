<?php

declare(strict_types=1); //on force les variables à être d'un seul type spécifique

require_once '../app/libraries/DatabaseManager.php';

class User extends DatabaseManager
{

    // public string $username;
    // public string $email;
    // public string $password;
    // public ?string $avatar;
    // public ?string $signature;

    public function __construct(string $username, string $email, string $password, ?string $avatar, ?string $signature) 
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
        $this->signature = $signature;
    }

    public function createUser(){//on demande ces parametres, les "?" disent qu'ils sont optionels
        $db = $this->connectDb();//on enclenche une connexion à la BdD
        $db->prepare(//on prépare une consigne sql
            'INSERT INTO users (nickname,email,password,avatar,signature) VALUES (?,?,?,?,?)'
        )->execute([$this->username, $this->email, $this->password, $this->avatar, $this->signature]);//et on l'exécute en remplaçant les "?" par les paramètres
    }

    public function loginUser($username, $password) {
        $db = $this->connectDb();
        $db->prepare(
            'SELECT nickname FROM users WHERE nickname = ? AND password = ?'
        );
        $_SESSION = $db->execute([$username,$password]);
        echo $_SESSION;
    }
}
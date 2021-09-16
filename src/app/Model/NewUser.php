<?php

declare(strict_types = 1);

require_once '../app/libraries/DatabaseManager.php';//on va chercher DatabaseManager.php

class NewUser extends DatabaseManager//on extend pour pouvoir utiliser la fonction connectDb de DatabaseManager depuis NewUser
{
    public function createUser(string $username, string $email, string $password, ?string $avatar, ?string $signature){//on demande ces parametres, les "?" disent qu'ils sont optionels
        $db = $this->connectDb();//on enclenche une connexion à la BdD
        $db->prepare(//on prépare une consigne sql
            'INSERT INTO users (nickname,email,password,avatar,signature) VALUES (?,?,?,?,?)'
        )->execute([$username,$email,$password,$avatar,$signature]);//et on l'exécute en remplaçant les "?" par les paramètres
    }
}
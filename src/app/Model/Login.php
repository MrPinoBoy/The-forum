<?php

declare (strict_types = 1);

require_once "../app/libraries/DatabaseManager.php";

class Login extends DatabaseManager
{
    public function loginCheck($email, $password) {
        $db = $this->connectDb();//on se connecte à la bdd
        $query = "SELECT nickname, email, signature, avatar FROM users WHERE email = '$email' AND password = '$password'";//on sélectionne le nickname qui correspond a celui entré dans le login si le mdp entré dans le login lui est associé
        foreach($db->query($query) as $row) {//le résultat est un objet PDO (PDO est la façon dont on se connecte à la bdd), qui contient une array avec pour valeur le nickname. Pour chaque array contenue dans l'objet:
            $_SESSION['loggedUser'] = $row[0];//on insert la valeur du premier élément dans $_SESSION['loggedUser']. C'est un peu contre intuitif de faire un foreach alors qu'il n'y a qu'un élément dans le pdo, pareil, d'avoir une array alors qu'il n'y a qu'une valeur dedans, mais je ne pense pas qu'il y ai un autre moyen
            //$_SESSION['loggedUser'] est maintenant disponible partout grace au session_start(), on peut donc vérifier son existence dans des conditions pour restreindre l'accès de certains éléments
            $_SESSION['loggedEmail'] = $row[1];
            $_SESSION['loggedSignature'] = $row[2];
            $_SESSION['loggedAvatar'] = $row[3];
        }
    }

    public function passwordFetch($email) {
        $db = $this->connectDb();
        foreach($db->query(
            "SELECT password FROM users WHERE email = '$email'"
        ) as $row){
            $password = $row[0];
        }
        return $password;
    }
}
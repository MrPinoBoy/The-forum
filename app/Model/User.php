<?php

declare(strict_types=1); //on force les variables à être d'un seul type spécifique

require_once '../app/libraries/DatabaseManager.php';

class User extends DatabaseManager
{

    public function __construct(string $username, string $email, string $password, ?string $avatar, ?string $signature) 
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;

        if($avatar !="") {
            $this->avatar = $this->imgToBase64($avatar);
        } else {
            $this->avatar = $this->get_gravatar($this->email);
        }

        $this->signature = $signature;
    }

    public function get_gravatar( $email, $s = 80, $d = 'retro', $r = 'g', $img = false, $atts = array() ) {
        $url = 'https://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
        return $url;
    }

    public function imgToBase64($avatar) {
        $base64 = 'data:image/' . pathinfo($avatar, PATHINFO_EXTENSION) . ';base64,' . base64_encode(file_get_contents($avatar));
        return $base64;
    }

    public function createUser(){//on demande ces parametres, les "?" disent qu'ils sont optionels
        $db = $this->connectDb();//on enclenche une connexion à la BdD
        $db->prepare(//on prépare une consigne sql
            'INSERT INTO users (nickname,email,password,avatar,signature) VALUES (?,?,?,?,?)'
        )->execute([$this->username, $this->email, $this->password, $this->avatar, $this->signature]);//et on l'exécute en remplaçant les "?" par les paramètres
    }

    public function updateUser($email){
        $db = $this->connectDb();
        $db->prepare(
            "UPDATE users SET nickname = ?, password = ?,avatar = ?,signature = ? WHERE email = ?"
            )->execute([$this->username, $this->password, $this->avatar, $this->signature, $this->email]);
        //quand les changements ont été uploadés, on met à jour la session de l'utilisateur
        $query = "SELECT nickname, signature, avatar FROM users WHERE email = '$email'";
        foreach($db->query($query) as $row) {
            $_SESSION['loggedUser'] = $row[0];
            $_SESSION['loggedSignature'] = $row[1];
            $_SESSION['loggedAvatar'] = $row[2];
        }
    }

    public function loginUser($username, $password) {
        $db = $this->connectDb();
        $_SESSION = $db->query(
            'SELECT nickname FROM users WHERE nickname = $username AND password = $password'
        );
        echo $_SESSION;
    }
}
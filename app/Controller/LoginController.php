<?php

class LoginController
{
    public function login() {
        //si les inputs ne sont pas vide, on vérifie que le mdp donné correspond à l'email donné
        //via loginCheck
        if($_POST['loginEmail'] != "" && $_POST['loginPassword'] != ""){
            (new Login())->loginCheck($_POST['loginEmail'], $_POST['loginPassword']);
        }
        //loginCheck va "remplir" (set de isSET) "$_SESSION['loggedUser'] si le mdp correspond à l'email, 
        //et envoyer l'utilisateur sur la page profile
        if(isset($_SESSION['loggedUser'])){
            //normalement on utilise les headers php pour rediriger un utilisateur mais vu la structure du site c'était pas faisable,
            //ça retournait une erreur
            echo '<meta http-equiv="refresh" content="0; URL=index.php?page=profile">';
        } else {
            //tant que $_SESSION n'est pas SET, on reste sur la page, et on affiche les inputs
            require_once "../app/View/users/login.php";
        }
    }

    public function profile() {
        if($_SESSION['loggedUser'] != ""){
        require_once "../app/View/users/profile.php";
        } else {
            //si on entre manuellement "index.php?page=profile" et qu'on est déconnecté, on est renvoyé à la page index.php
            echo '<meta http-equiv="refresh" content="0; URL=index.php">';
        }
    }
}
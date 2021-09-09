<?php

class LoginController
{
    public function login() {
        if($_POST['loginEmail'] != "" && $_POST['loginPassword'] != ""){
            (new Login())->loginCheck($_POST['loginEmail'], $_POST['loginPassword']);
        }

        require_once "../app/View/users/login.php";
    }

    public function profile() {
        if($_SESSION['loggedUser'] != ""){
        require_once "../app/View/users/profile.php";
        }
    }
}
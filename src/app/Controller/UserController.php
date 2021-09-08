<?php
    class UserController
    {
        public function create(){
            if($_POST['nickname'] != "" && $_POST['email'] != "" && $_POST['password'] != ""){// on check que les inputs ne soient pas vide
                if($_POST['signature'] == "") {//si la signature est omise on la remplace par une valeur par défaut
                    $_POST['signature'] = "Signature goes here";
                }
                (new User($_POST["nickname"],$_POST["email"],$_POST["password"],$_POST["avatar"],$_POST["signature"]))->createUser();//on crée un nouvel objet "User" et on envoie ses infos dans la bdd
                $_POST = array();//on vide $_POST pour être sur, je ne sais pas si c'est nécessaire
            } else {
                echo "please fill all required fields";
            }
            require_once '../app/View/users/createUser.php';
        }
    }
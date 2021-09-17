<?php
    class UserController
    {
        public function create(){
            $pattern = "/^[A-Za-z0-9\S]*$/m";//on s'assure que les inputs de l'utilisateur ne sont que des lettres, chiffres et charactères spéciaux hors espacement (ça se trouve tout fait sur internet)
            if($_POST['nickname'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && preg_match_all($pattern, $_POST['nickname']) && preg_match_all($pattern, $_POST['password'])){// on check que les inputs ne soient pas vide
                if($_POST['signature'] == "") {//si la signature est omise on la remplace par une valeur par défaut
                    $_POST['signature'] = "Signature goes here";
                }
                (new User($_POST["nickname"],$_POST["email"],$_POST["password"],$_FILES['avatar']['tmp_name'],$_POST["signature"]))->createUser();//on crée un nouvel objet "User" et on envoie ses infos dans la bdd
                echo '<meta http-equiv="refresh" content="0; URL=index.php">';
            } else {
                if(isset($_POST['nickname']) || isset($_POST['email']) || isset($_POST['password'])) {
                echo "please fill all required fields";
                }
            }
            require_once '../app/View/users/createUser.php';
        }

        public function update(){
            $pattern = "/^[A-Za-z0-9\S]*$/m";
            if($_POST['updateNickname']!="" && preg_match_all($pattern, $_POST['updateNickname'])){
                $newNickname = $_POST['updateNickname'];
            } else {
                $newNickname = $_SESSION['loggedUser'];
            }

            if($_POST['updatePassword']!="" && preg_match_all($pattern, $_POST['updateNickname'])){
                $newPassword = $_POST['updatePassword'];
            } else {
                $newPassword = (new Login())->passwordFetch($_SESSION['loggedEmail']);//$_SESSION['loggedPassword'];
            }

            if($_POST['updateSignature']!=""){
                $newSignature = $_POST['updateSignature'];
            } else {
                $newSignature = $_SESSION['loggedSignature'];
            }

            if(isset($_FILES['updateAvatar']['tmp_name'])){
                $newAvatar = $_FILES['updateAvatar']['tmp_name'];
            } else {
                $newAvatar = $_SESSION['loggedAvatar'];
            }
            (new User($newNickname,$_SESSION['loggedEmail'],$newPassword,$newAvatar,$newSignature))->updateUser($_SESSION['loggedEmail']);
            require_once '../app/View/users/updateUser.php';
        }
    }

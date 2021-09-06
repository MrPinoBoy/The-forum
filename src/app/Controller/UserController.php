<?php
    //models
    require_once "../Model/NewUser.php";//on va chercher les fichiers nécessaires au script
    //controllers

    //config
    require_once "../config/config.php";

    (new NewUser())->createUser($_POST["nickname"],$_POST["email"],$_POST["password"],$_POST["avatar"],$_POST["signature"]);//on crée un nouvel utilisateur et on lui applique la fonction createUser avec les paramêtres insérés

<?php
    //models
    require_once "../Model/User.php";//on va chercher les fichiers nécessaires au script
    //controllers

    //config
    require_once "../config/config.php";

    (new User($_POST["nickname"],$_POST["email"],$_POST["password"],$_POST["avatar"],$_POST["signature"]))->createUser();//on crée un nouvel utilisateur et on lui applique la fonction createUser avec les paramêtres insérés

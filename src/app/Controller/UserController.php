<?php
    //models
    require_once "../Model/NewUser.php";//on va chercher les fichiers nécessaires au script
    //controllers

    //config
    require_once "../config/config.php";

    (new NewUser($_POST["nickname"]))->createUser();//on crée un nouvel utilisateur et on lui applique la fonction createUser avec les paramêtres insérés

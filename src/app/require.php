<?php

declare(strict_types = 1);

//on require tous les controllers
require_once "Controller/HomepageController.php";
require_once "Controller/UserController.php";
require_once "Controller/LoginController.php";
//on require tous les models
require_once "Model/User.php";
require_once "Model/Login.php";
//on require les config et libraries qui seront utilisées dans tout le site
require_once "config/config.php";
require_once "libraries/Parsedown.php";
//on ne require pas les views, c'est le job des controllers et elles doivent être appelées au bon moment

$page = $_GET['page'] ?? null;

//la library parsedown interprète le markdown super facilement
// $parsedown = new Parsedown();
// echo $parsedown->line('Hello _Parsedown_!');
//le problème c'est qu'elle ne contient pas un éditeur directement dans la textarea du message, 
//l'user doit donc écrire en markdown lui même

//ce switch regarde dans l'url ce qu'il se trouve après "index.php?page="
//en fonction de ce qu'il y trouve, il effectue l'action déterminée
switch($page) {

    //On est sur la page "index.php?page=createUser". On crée un nouvel objet de la classe "UserController" 
    //(qui se trouve dans Controller/UserController.php) et effectue sa fonction "create()".
    //au break, on sort du switch
    case "createUser":
        (new UserController())->create();
        break;

    case "login":
        (new LoginController())->login();
        break;
    
    case "profile":
        (new loginController())->profile();
        break;

    case "updateprofile":
        (new UserController())->update();
        break;
    
    //ici, on vide toutes nos variables de session ($_SESSION) avec unset, 
    //puis on détruit la session actuelle avec session_destroy
    //contrairement aux autres "case", il n'y a pas de "break", donc au lieu de s'arrêter à notre "case disconnect", la loop switch
    //va passer à la case home. Idem, pas de break, la boucle switch va passer à la case default, et nous ramener à la page d'accueil
    case "disconnect":
        unset($_SESSION);
        session_destroy();
        echo '<meta http-equiv="refresh" content="0; URL=index.php">';

    case "home":

    default:
        (new HomepageController())->index();
        break;
}
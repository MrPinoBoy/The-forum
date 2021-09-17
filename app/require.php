<?php

declare(strict_types = 1);
session_start();
//on require tous les controllers
require_once "Controller/HomepageController.php";
require_once "Controller/UserController.php";
require_once "Controller/LoginController.php";
require_once "Controller/TopicController.php";
require_once "Controller/TopicListController.php";
require_once "Controller/MainPageController.php";
require_once "Controller/MessageController.php";
//on require tous les models
require_once "Model/User.php";
require_once "Model/Login.php";
require_once "Model/Topic.php";
require_once "Model/TopicList.php";
require_once "Model/NewTopic.php";
require_once "Model/MainPageModel.php";
require_once "Model/MessageList.php";
require_once "Model/Message.php";
require_once "Model/NewMessage.php";
require_once "Model/Board.php";
//on require les config et libraries qui seront utilisées dans tout le site
require_once "config/config.php";
require_once "libraries/Parsedown.php";
//on ne require pas les views, c'est le job des controllers et elles doivent être appelées au bon moment

require "View/includes/header.php";

$page = $_GET['page'] ?? null;
$board = $_GET["board"] ?? null;

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
        case 'CreateTopic':
            (new TopicController())->createTopic();  
            break;
        
        // case 'TopicList':
        //     (new TopicListController())->index();
        //     break;
        
    case 'Topic':
        (new TopicListController())->show();
        (new TopicListController())->lock();
        (new MessageController())->msgList($_GET["Topic"]);
        // (new MessageController())->newMessage($_GET["Topic"]);
        break;
    
    case 'newmsg':
        (new MessageController())->newMessage($_GET["Topic"]);
        break;

    case 'Boards':
        (new TopicListController())->index($board);
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
            (new MainPageController())->indexMP();
            break;
    }

    require "View/includes/footer.php";
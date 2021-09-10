<?php

declare(strict_types = 1);

//include all controllers here
require_once "Controller/UserController.php";
require_once "Controller/LoginController.php";
//include all models here
require_once "Model/User.php";
require_once "Model/Login.php";
//include config file here
require_once "config/config.php";
//views are called inside of the controllers

$page = $_GET['page'] ?? null;

switch($page) {
    case "createUser":
        (new UserController())->create();
        break;

    case "login":
        (new LoginController())->login();
        break;

    case "disconnect":
        session_destroy();
        break;
    
    case "profile":
        (new loginController())->profile();
        break;
}
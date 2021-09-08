<?php

declare(strict_types = 1);

//include all controllers here
require_once "Controller/UserController.php";
//include all models here
require_once "Model/User.php";
//include config file here
require_once "config/config.php";
//views are called inside of the controllers

$page = $_GET['page'] ?? null;

switch($page) {
    case "createUser":
        (new UserController())->create();
}
<?php

declare(strict_types = 1);

require_once "Controller/TopicController.php";
require_once "Controller/TopicListController.php";
require_once "Controller/MainPageController.php";
require_once "Model/Topic.php";
require_once "Model/TopicList.php";
require_once "Model/NewTopic.php";
require_once "Model/MainPageModel.php";
require_once "config/config.php";


$page = $_GET["page"] ?? null;
$board = $_GET["board"] ?? null;

switch ($page) {
    case 'CreateTopic':
        (new TopicController())->createTopic();  
        break;
    
    case 'TopicList':
        (new TopicListController())->index();
        break;
    
    case 'Topic':
        (new TopicListController())->show();
        break;

    case 'Boards':
        switch($board) {
            case 'General':
                (new TopicListController())->index($board);
                break;
            }
        break;
    
    default:
        (new MainPageController())->indexMP();
        break;
}


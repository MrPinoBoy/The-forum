<?php

declare(strict_types = 1);

require_once "Controller/TopicController.php";
require_once "Controller/TopicListController.php";
require_once "Model/Topic.php";
require_once "config/config.php";


$page = $_GET["page"] ?? null;

switch ($page) {
    case 'CreateTopic':
        (new TopicController())-> createTopic();  
        break;
    
    case 'TopicList':
        (new TopicListController())-> index();
        break;
    
    case 'Topic':
        (new TopicListController())-> show();
        break;
    
    default:
        # code...
        break;
}
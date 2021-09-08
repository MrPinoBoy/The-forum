<?php

declare(strict_types = 1);

require_once "Controller/TopicController.php";
require_once "Model/Topic.php";
require_once "config/config.php";

$page = $_GET["page"] ?? null;

switch ($page) {
    case 'CreateTopic':
        (new TopicController())-> createTopic();  
        break;
    
    default:
        # code...
        break;
}
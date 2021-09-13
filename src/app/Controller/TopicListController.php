<?php

declare(strict_types = 1);

require_once '../app/Model/TopicList.php';
require_once '../app/Model/Topic.php';

class TopicListController{

    public function index($board){

        $model = new TopicList;
        $topics = $model->getTopics($board);
        foreach($topics as $key =>$topic){
            $topics[$key] = new Topic($topic['title'],$topic['creationDate'],$topic['author'],$topic['board']);
            
        
        }

        require '../app/View/topic/topicList.php';
    }


//afficher 1 seul article sur une page

    public function show(){
        $model = new TopicList;
        $topic = $model->getSingleTopic($_GET['Topic']);
        $topic = new Topic($topic['title'],$topic['creationDate'],$topic['author'],$topic['board']);

        require '../app/View/topic/topic.php';
    }
}
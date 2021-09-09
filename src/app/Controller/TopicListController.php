<?php

declare(strict_types = 1);

require_once '../app/Model/TopicList.php';
require_once '../app/Model/Topic.php';

class TopicListController{

    public function index(){

        $model = new TopicList;
        $topics = $model->getTopics();
        foreach($topics as $key =>$topic){
            $topics[$key] = new Topic($topic['Title'],$topic['creationDate'],$topic['Contents'],$topic['Author'],$topic['Board']);
            
        
        }

        require '../app/View/topic/topicList.php';
    }


//afficher 1 seul article sur une page

    public function show(){
        $model = new TopicList;
        $topic = $model->getSingleTopic($_GET['Topic']);
        $topic = new Topic($topic['Title'],$topic['creationDate'],$topic['Contents'],$topic['Author'],$topic['Board']);

        require '../app/View/topic/topic.php';
    }
}
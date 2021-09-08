<?php

class TopicController {

    public function createTopic(){

        if($_POST["title"] != "" && $_POST["content"] != ""){

            (new Topic($_POST["title"],$_POST["content"],$_POST["author"],$_POST["creation_date"]))->createTopic(); 
        }

        require_once "../app/View/topic/createTopic.php";
    
    }

   
}
    
    

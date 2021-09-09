<?php

class TopicController {

    public function createTopic(){

        if($_POST["title"] != "" && $_POST["content"] != ""){

            (new NewTopic($_POST["title"],$_POST["content"],$_POST["author"],$_POST["creation_date"],$_POST["board"]))->createTopic(); 
        }

        require_once "../app/View/topic/createTopic.php";
    
    }

   
}
    
    

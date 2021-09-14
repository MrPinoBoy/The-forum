<?php

declare(strict_types = 1);



class MainPageController{

    public function indexMP(){

        $mainPage = new MainPage;
        $boardsMP = $mainPage->getBoards();

        foreach($boardsMP AS $board){
            echo "$board[name]<br>";
            echo "$board[description]<br>";
        }

        require_once '../app/View/mainpage/MainPageView.php';
        // foreach($topics as $key =>$topic){
        //     $topics[$key] = new Topic($topic['title'],$topic['creationDate'],$topic['author'],$topic['board']);
            
        
        // }
    }
}


<?php

declare(strict_types = 1);



class MainPageController{

    public function indexMP(){

        $mainPage = new MainPage;
        $boardsMP = $mainPage->getBoards();

        foreach($boardsMP AS $board){
            echo "<a href=index.php?page=Boards&board=".$board['name'].">".$board['name']."<br>".$board['description']."</a><br>";
            $topicsMP = $mainPage->getRecentTopics($board['name']);
            for($i=0;$i<3;$i++){
                echo "<a href=index.php?page=Topic&Topic=".$topicsMP[$i]['title'].">".$topicsMP[$i]['title']."<br>".
                $topicsMP[$i]['creationDate']."<br>".
                $topicsMP[$i]['author']."</a><br>";
            }
        }

        require_once '../app/View/mainpage/MainPageView.php';
    }
}


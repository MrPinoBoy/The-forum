<?php

declare(strict_types = 1);



class MainPageController{

    public function indexMP(){

        $mainPage = new MainPage;
        $boardsMP = $mainPage->getBoards();
        foreach($boardsMP as $key=>$board){
            $name = $board['name'];
            $desc = $board['description'];
            $boards[$key] = new Board($board['name'],$board['description']);
            $topicsMP = $mainPage->getRecentTopics($name);
            for($i=0;$i<3;$i++){
                        $title = $topicsMP[$i]['title'];
                        $date = $topicsMP[$i]['creationDate'];
                        $author = $topicsMP[$i]['author'];
                        $topics[$i."title".$board['name']]= $title;
                        $topics[$i."date".$board['name']]= $date;
                        $topics[$i."author".$board['name']]= $author;
                    
                }
        }
        



        require_once '../app/View/mainpage/MainPageView.php';
    }
}
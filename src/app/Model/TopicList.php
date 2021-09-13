<?php 

declare(strict_types=1);

require_once '../app/libraries/DatabaseManager.php'; 

class TopicList extends DatabaseManager
{
    public function getTopics($board){
        $data = $this->fetchTopics($board);
        return $data;
    }

    public function fetchTopics($board){
        $db = $this->connectDb();

        $req = $db->query(
            "SELECT * 
            FROM topics
            WHERE board = '$board'
            ORDER BY creationDate
            DESC");

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSingleTopic($title){
        
        $data = $this->fetchSingleTopic($title);
        return $data;
    }

    public function fetchSingleTopic($title){
        $db = $this->connectDb();

        $req = $db->query(
            "SELECT * 
            FROM topics
            WHERE Title = '$title'
            ");

        return $req->fetch(PDO::FETCH_ASSOC);
    }

    

}
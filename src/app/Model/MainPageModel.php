<?php

declare(strict_types=1);

require_once '../app/libraries/DatabaseManager.php';

class MainPage extends DatabaseManager{

    public function getBoards(){


        $db = $this->connectDb();//on enclenche une connexion à la BdD
        $req = $db->query(//on prépare une consigne sql
            "SELECT * FROM `boards`");

            return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRecentTopics($board) {
        $db = $this->connectDb();
        $req = $db->query(
            "SELECT title, t.creationDate, t.author FROM `boards` as b inner join topics as t inner join messages as m where b.name = t.board and '$board' = t.board  and t.title = m.topic order by m.creationDate desc;"
        );
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}


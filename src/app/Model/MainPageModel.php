<?php

declare(strict_types=1);

require_once '../app/libraries/DatabaseManager.php';

class MainPage extends DatabaseManager{

    public function getBoards(){


        $db = $this->connectDb();//on enclenche une connexion à la BdD
        $nainporte = $db->query(//on prépare une consigne sql
            "SELECT name, description FROM boards");

            return $nainporte->fetchAll(PDO::FETCH_ASSOC);
    }

}


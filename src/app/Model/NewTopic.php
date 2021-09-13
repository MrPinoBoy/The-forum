<?php

declare(strict_types=1); //on force les variables à être d'un seul type spécifique

require_once '../app/libraries/DatabaseManager.php';

// $today = date("Y-m-d H:i:s");

class NewTopic extends DatabaseManager
{

    // public string $title;
    // public string $content;
    // public string $author;
    // public ?string $creation_date;

    public function __construct(string $title, string $content, string $board) 
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = "William"; //utilisateur connecté
        $this->creation_date = date("Y-m-d H:i:s", strtotime('+2 hours')); //date et heure actuelle 
        $this->board = $board; //afficher le board parent
    }


    public function createTopic(){//on demande ces parametres, les "?" disent qu'ils sont optionels
        $db = $this->connectDb();//on enclenche une connexion à la BdD
        $db->prepare(//on prépare une consigne sql
            "INSERT INTO topics (Title,Author,creationDate, Board) VALUES (?,?,?,?);"
            
            )->execute([$this->title,$this->author,$this->creation_date,$this->board]);

        $db->prepare("INSERT INTO messages(author, content, creationDate, topic, editionDate) VALUES (?,?,?,?,?);")->execute([$this->author,$this->content,$this->creation_date,$this->title,$this->creation_date]);   


            //     "INSERT INTO topics (Title,Contents,Author,creationDate, Board) VALUES (?,?,?,?,?)"
        // )->execute([$this->title,$this->content,$this->author,$this->creation_date,$this->board]);//et on l'exécute en remplaçant les "?" par les paramètres
    }
}

//app/testTopic.php
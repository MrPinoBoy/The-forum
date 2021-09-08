<?php

declare(strict_types=1); //on force les variables à être d'un seul type spécifique

require_once '../app/libraries/DatabaseManager.php';

// $today = date("Y-m-d H:i:s");

class Topic extends DatabaseManager
{

    // public string $title;
    // public string $content;
    // public string $author;
    // public ?string $creation_date;

    public function __construct(string $title, string $content) 
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = "William"; //utilisateur connecté
        $this->creation_date = date("Y-m-d H:i:s"); //date et heure actuelle (changer le type de la database VarCHAR --> DATE)
    }


    public function createTopic(){//on demande ces parametres, les "?" disent qu'ils sont optionels
        $db = $this->connectDb();//on enclenche une connexion à la BdD
        $db->prepare(//on prépare une consigne sql
            "INSERT INTO Table_topics (Title,Contents,Author,creationDate) VALUES (?,?,?,?)"
        )->execute([$this->title,$this->content,$this->author,$this->creation_date]);//et on l'exécute en remplaçant les "?" par les paramètres
    }
}

//app/testTopic.php
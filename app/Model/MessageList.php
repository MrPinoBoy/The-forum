<?php

//6) MessageList est encore une fois une classe d'objet. Quand on travaille en MVC, le Model est l'objet qui va
// intéragir avec la base de données.
//Les ligne 6 et 8 servent à donner l'accès à la fonction "connectDb()" de la classe d'objet "DatabaseManager", qui établi une connexion à la base de données
require_once "../app/libraries/DatabaseManager.php"; //ici on donne le lien du fichier où se trouve la classe
class MessageList extends DatabaseManager {// et ici le extends permet à MessageList d'utiliser les fonctions et variables de DatabaseManager
    
    //Encore une fois c'est une fonction publique
    public function getMessages($topic) {
        //on établi la connexion à la base de données, et cette connexion est stockée dans la variable "$db"
        // $db est désormais un objet de type PDO, qui est une méthode de connexion aux bases de données.
        // Pour rappel, $this réfère à l'objet dans lequel on se trouve, ici un new MessageList
        // J'ai commenté la fonction connectDb() pour un peu expliquer comment ça marche dans le fichier libraries/DatabaseManage.php
        $db=$this->connectDb();

        // On effectue une requète sql sur notre objet PDO "$db", où on demande de prendre (SELECT) 
        // tous (*) les éléments de la table "messages" (FROM messages) où le topic est égal à $topic
        // (WHERE topic = $topic ($topic que l'ont traine depuis require.php, c'est le $_GET['topic'] de tout à l'heure))
        // Et on ordonne par creationDate, du plus petit au plus grand (ORDER BY creationDate)
        $req=$db->query(
            "SELECT * FROM `messages` WHERE topic = '$topic' ORDER BY creationDate"
        );
        //D'après ce que j'ai compris, la query retourne "1" si elle a trouvé un résultat correspondant à ce qu'on cherche
        // et pour récupérer le-dit résultat on fait fetchAll(PDO::FETCH_ASSOC)
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
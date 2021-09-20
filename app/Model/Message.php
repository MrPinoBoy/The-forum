<?php

//8) On crée la classe Message
class Message {

    // __construct est une fonction qui sera effectué lorsqu'on créera un nouvel objet Message (new Message())
    public function __construct($content, $creationDate, $author, $editionDate, $topic, $deleted, $edited, $id) {

        // Ligne 15, on défini la valeur de la caractéristique "content" comme étant la valeur donnée à l'emplacemnt
        // "$content" (donc 1 dans new Message(1,2,3,4...))
        // Et ainsi de suite pour les autres caractéristiques
        // A quoi ça sert? Eh bien disons qu'on a $MessageExemple = new Message("Exemple", ..., ..., ......)
        // en écrivant ensuite "$MessageExemple->content", on ira toujours chercher la valeur de la caractéristique
        // "content" de l'objet "$MessageExemple", qui ici vaut "Exemple"
        // on retourne encore dans MessageController
        $this->content=$content;
        $this->creationDate=$creationDate;
        $this->author=$author;
        $this->editionDate=$editionDate;
        $this->topic=$topic;
        $this->deleted=$deleted;
        $this->edited=$edited;
        $this->id = $id;
    }



    public function editMessage($id){
        $db=$this->connectDb();
        $db->prepare(
            "UPDATE messages SET content = ?, editionDate = ?, edited = 1 WHERE ID = ?"
        )->execute([$this->content, date("Y-m-d H:i:s", strtotime('+2 hours')), $id]);

    }
}
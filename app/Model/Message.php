<?php

class Message {
    public function __construct($content, $creationDate, $author, $editionDate, $topic, $deleted, $edited, $id) {
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
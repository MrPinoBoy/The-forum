<?php

class Message {
    public function __construct($content, $creationDate, $author, $editionDate, $topic, $deleted, $edited) {
        $this->content=$content;
        $this->creationDate=$creationDate;
        $this->author=$author;
        $this->editionDate=$editionDate;
        $this->topic=$topic;
        $this->deleted=$deleted;
        $this->edited=$edited;
    }
}
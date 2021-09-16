<?php
require_once '../app/libraries/DatabaseManager.php';
class NewMessage extends DatabaseManager {
    public function __construct($content, $author, $topic){
        $this->content=$content;
        $this->author=$author;
        $this->topic=$topic;
        $this->date=date("Y-m-d H:i:s", strtotime('+2 hours'));
        $this->editiondate=$this-> date;
        $this->deleted=0;
        $this->edited=0;
    }
    public function sendMessage(){
        $db=$this->connectDb();
        $db->prepare(
            'INSERT INTO messages (content, creationDate, author, editionDate, topic, deleted, edited) VALUES (?, ?, ?, ?, ?, ?, ?)'
        )->execute(
            [$this->content, $this->date, $this->author, $this->editiondate, $this->topic, $this->deleted, $this->edited]
        );
    }
}
?>
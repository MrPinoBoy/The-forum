<?php

require_once "../app/libraries/DatabaseManager.php";
class MessageList extends DatabaseManager {
    public function getMessages($topic) {
        $db=$this->connectDb();
        $req=$db->query(
            "SELECT * FROM `messages` WHERE topic = '$topic' ORDER BY creationDate"
        );
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
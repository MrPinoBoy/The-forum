  <?php

// declare(strict_types=1);
 require_once "../app/libraries/DatabaseManager.php";

class Topic extends DatabaseManager
{

    public function __construct(string $title, ?string $creationDate, ?string $author, ?string $board, ?string $id, ?string $locked)
    {
        $this->title = $title;
        $this->creationDate = $creationDate;
        $this->author = $author;
        $this->board = $board;
        $this->id = $id;
        $this->locked = $locked;

    }

    public function formatPublishDate() //modifie l'affichage de date&heure
    {
        $formatted = date('d/M/Y', strtotime($this->publishDate));
        return $formatted;
    }

    public function update() {
        $db = $this->connectDb();
        $id = $this->id;
        $db->query(
            "UPDATE topics SET locked = 1 WHERE ID = $id"
        );
    }
}
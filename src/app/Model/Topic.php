  <?php

// declare(strict_types=1);
 

class Topic
{

    public function __construct(string $title, ?string $creationDate, ?string $content, ?string $author, ?string $board)
    {
        $this->title = $title;
        $this->creationDate = $creationDate;
        $this->author = $author;
        $this->content = $content;
        $this->board = $board;

    }

    public function formatPublishDate() //modifie l'affichage de date&heure
    {
        $formatted = date('d/M/Y', strtotime($this->publishDate));
        return $formatted;
    }
}
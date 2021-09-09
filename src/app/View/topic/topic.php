<?php require '../app/View/includes/header.php'?>


<section>

    <h1><?= $topic->title ?></h1>
    <p><?= $topic->creationDate ?></p>
    <p><?= $topic->content ?></p>
    <p><?= $topic->author ?></p>
    <p><?= $topic->board ?></p>

</section>

<?php require '../app/View/includes/footer.php'?>
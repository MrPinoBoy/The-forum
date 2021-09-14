<?php require '../app/View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>
    <h1>Articles</h1>
    <?php if(isset($_SESSION['loggedUser']) && $_SESSION['loggedUser']!=""):?>
    <a href = "index.php?page=CreateTopic&board=<?= $board ?>">CLIC HERE DUMBASS</a>
    <?php endif;?>
    <ul>
        <?php foreach ($topics as $topic) : ?>
            
    
            <li><a href="index.php?page=Topic&Topic=<?= $topic->title?>"><?=$topic->title ?></a>
        <p><?= $topic->creation_date ?></p></li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require '../app/View/includes/footer.php'?>


<?php foreach($messages as $message):?>

    <p><?=$message->content?></p>
    <p><?=$message->author?></p>
    <p><?=$message->creationDate?></p>
    <?php if($this->author = $_SESSION['loggedUser']):?>
        <form action="./index.php?page=editMsg&id=<?=$message->id?>">
        <input type="submit" value="Edit">
        </form>
    <?php endif; ?>
    
    <?php endforeach;?>

<?php foreach($messages as $message):?>

    <p><?=$message->content?></p>
    <p><?=$message->author?></p>
    <p><?=$message->creationDate?></p>

    <?php endforeach;?>

<form action="./index.php?page=newmsg&Topic=<?= $_GET['Topic'] ?>" method="post">
    <input type="textarea" name="newMessage"></input>
    <input type="submit" value="post message"></input>
</form>
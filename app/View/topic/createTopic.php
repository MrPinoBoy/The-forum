<!-- // require header & footer -->

<form method="post" action="./index.php?page=CreateTopic" >
    <input type="text" name="title"></input>
    <input type="text" name="content"></input>
    <input type="hidden" name="board" value="<?= $_GET['board'] ?>"></input>
    <input type="submit"></input>
</form>

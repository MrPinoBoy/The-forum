<?php require '../app/View/includes/header.php'?>

<form method="POST" action="./index.php?page=login">
    <input type="text" name="loginEmail" placeholder="email"></input>
    <input type="text" name="loginPassword" placeholder="password"></input>
    <input type="submit"></input>
</form>

<?php require '../app/View/includes/footer.php'?>
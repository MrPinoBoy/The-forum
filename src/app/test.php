Create new user:
<form method="post" action="./Controller/UserController.php"><!-- php sends the form values to this page-->
    <input type="text" name="nickname" placeholder="Username"></input>
    <input type="text" name="email" placeholder="Email"></input>
    <input type="text" name="password" placeholder="Password"></input>
    <input type="file" name="avatar" placeholder="notrequired"></input>
    <input type="text" name="signature" placeholder="notrequired"></input><!-- this sends an empty string, try to send null if empty-->
    <input type="hidden" value="createUser" name="formType"></input>
    <input type="submit"></input>
</form>


Log in:
<form method="post" action="./Controller/UserController.php">
    <input type="text" name="loginUsername" placeholder="username"></input>
    <input type="text" name="loginUsername" placeholder="username"></input>
    <input type="hidden" value="loginUser" name="formType"></input>
    <input type="submit"></input>
</form>

<?php

    if($_POST["formType"] == "createUser") {
        (new User($_POST["nickname"],$_POST["email"],$_POST["password"],$_POST["avatar"],$_POST["signature"],$_POST["formType"]))->createUser();//on crée un nouvel utilisateur et on lui applique la fonction createUser avec les paramêtres insérés
    }

    if($_POST["formType"] == "loginUser") {
        User::loginUser($_POST["loginUsername"], $_POST["loginPassword"]);
    }
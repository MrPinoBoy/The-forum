<?php require '../app/View/includes/header.php'?>

<form method="POST" action="./index.php?page=createUser"><!-- php sends the form values to this page-->
    <input type="text" name="nickname" placeholder="Username"></input>
    <input type="text" name="email" placeholder="Email"></input>
    <input type="text" name="password" placeholder="Password"></input>
    <input type="file" name="avatar" placeholder="notrequired"></input>
    <input type="text" name="signature" placeholder="notrequired"></input><!-- this sends an empty string, try to send null if empty-->
    <input type="hidden" value="createUser" name="formType"></input>
    <input type="submit"></input>
</form>

<?php require '../app/View/includes/footer.php'?>
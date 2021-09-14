<?php require '../app/View/includes/header.php'?>

<form method="POST" action="./index.php?page=updateprofile" enctype="multipart/form-data"><!-- php sends the form values to this page-->
    <input type="text" name="updateNickname" placeholder="Username"></input>
    <input type="text" name="updatePassword" placeholder="Password"></input>
    <input type="file" name="updateAvatar" placeholder="notrequired"></input>
    <label for="defaultAvatar">Check if you want a default avatar</label>
    <input type="checkbox" name="defaultAvatar" value="true"></input>
    <input type="text" name="updateSignature" placeholder="notrequired"></input>
    <input type="submit"></input>
</form>

<?php require '../app/View/includes/footer.php'?>
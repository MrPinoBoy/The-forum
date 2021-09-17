
<form method="POST" action="./index.php?page=updateprofile" enctype="multipart/form-data"><!-- php sends the form values to this page-->
    <input type="text" name="updateNickname" placeholder="Username" value="<?=$_SESSION['loggedUser']?>"></input>
    <input type="text" name="updatePassword" placeholder="Password"></input>
    <img src="<?= $_SESSION['loggedAvatar']?>">
    <input type="file" name="updateAvatar" placeholder="notrequired"></input>
    <label for="defaultAvatar">Check if you want a default avatar</label>
    <input type="checkbox" name="defaultAvatar" value="true"></input>
    <input type="text" name="updateSignature" placeholder="notrequired" value="<?=$_SESSION['loggedSignature']?>"></input>
    <input type="submit"></input>
</form>


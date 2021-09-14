<?php require '../app/View/includes/header.php'?>

<h1>Hello <?= $_SESSION['loggedUser']?></h1>
<img src="<?= $_SESSION['loggedAvatar']?>">
<p>Your email is <?= $_SESSION['loggedEmail']?></p>
<p>Your signature is <?= $_SESSION['loggedSignature']?></p>
<a href="index.php?page=updateprofile">Update Informations</a>

<?php require '../app/View/includes/footer.php'?>
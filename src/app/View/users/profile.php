<?php require '../app/View/includes/header.php'?>

<h1>Hello <?= $_SESSION['loggedUser']?></h1>
<p>Your email is <?= $_SESSION['loggedEmail']?></p>
<p>Your signature is <?= $_SESSION['loggedSignature']?></p>
<img src="<?= $_SESSION['loggedAvatar']?>">

<?php require '../app/View/includes/footer.php'?>
<?php //ce fichier sera le seul auquel l'utilisateur aura accès c'est en quelque sorte la page d'accueil?>
<?php
    require_once '../app/require.php';//on connecte ce fichier à notre dossier de développement, auquel l'utilisateur ne peut surtout pas avoir accès
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME ?></title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <a href="index.php?page=createUser">test</a>
    <a href="index.php?page=login">login</a>
    <a href="index.php?page=disconnect">disconnect</a>
    <a href="index.php?page=profile">profile</a>
    <a href="index.php?page=boards&board=general">profile</a>
</body>
</html>
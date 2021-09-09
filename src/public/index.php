<?php session_start()?><!-- on crée une session en arrivant sur la page, afin de pouvoir utiliser $_SESSION -->
<?php
    require_once '../app/require.php';
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
    <a href="index.php?page=profile&board=general">profile</a>
</body>
</html>
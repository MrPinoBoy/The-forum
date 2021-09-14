<?php

//liens disponibles tout le temps
echo '<a href="index.php">Home</a>';
echo "<br>";

//liens disponibles quand on est connectés
if (isset($_SESSION['loggedUser'])) {
    echo '<a href="index.php?page=profile">Profile</a>';
    echo '<br>';
    echo '<a href="index.php?page=disconnect">Disconnect</a>';
} else {

    //liens disponibles quand on est pas connectés
    echo '<a href="index.php?page=createUser">Register</a>';
    echo '<br>';
    echo '<a href="index.php?page=login">Login</a>';
}

//le même principe est à appliquer quand on veut restreindre l'accès à certaines fonctionnalités, il faut juste mettre la condition au bon endroit
//(probablement uniquement dans le view)
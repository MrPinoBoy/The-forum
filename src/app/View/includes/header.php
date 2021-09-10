<?php
if ($_SESSION['loggedUser'] != "") {
    require_once '../app/View/users/createUser.php';
}
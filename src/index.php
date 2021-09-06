<?php 

$dbo = new PDO("mysql:host=mysql;dbname=forum","root","root");
foreach($dbo->query("SELECT * FROM boards ORDER BY ID") as $row) {
    echo "$row[1]<br>
    $row[2]<br>";
}
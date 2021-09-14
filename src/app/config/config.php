<?php

    //Paramêtres de la base de données (ils se trouvent dans le fichier docker-compose.yml)
    //dès que ce fichier est require, les variables DB_HOST, DB_USER etc seront utilisable comme des constantes
    define('DB_HOST','mysql');
    define('DB_USER','root');
    define('DB_PASS','root');
    define('DB_NAME','forum');

    //URLROOT (Dynamic links)
    define('URLROOT','localhost');

    //Sitename
    define('SITENAME','Forum - BeCode');

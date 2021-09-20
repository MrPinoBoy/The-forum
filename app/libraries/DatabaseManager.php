<?php 
//on crée une class d'objet DatabaseManager
    class DatabaseManager{

        //ici on assigne aux $variables la valeur des constantes définies dans config/config.php
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;

        //la fonction connectDb est protected, donc seul les objets de la class DatabaseManager
        //ou les objets extends DatabaseManager peuvent l'utiliser
        protected function connectDb()
        {
            //dans le try, on essaie de se connecter à la base de données avec les différents
            //paramètres qu'on a défini (voir doc PDO sur le site de php)
            //et donc pour se faire on crée un objet de type PDO
            try{
                $db = new PDO('mysql:host=' . $this->dbHost .';dbname='. $this->dbName .';',$this->dbUser,$this->dbPass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
                //si on y arrive pas on reçoit une erreur
            } catch(Exception $e){
                die('Error : '.$e->getMessage());
            }
        }
    }
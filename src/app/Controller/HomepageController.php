<?php

class HomepageController
{
    //lorsque cette fonction est appellée, on affiche la page d'accueil (home.php)
    public function index(){
        require_once "../app/View/home.php";
    }
}
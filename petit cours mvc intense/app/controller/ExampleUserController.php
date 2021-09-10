<?php
    class UserController
    {
        public function create(){
            (new User($_POST['nickname'],$_POST['email'],$_POST['password'],$_POST['avatar'],$_POST['signature']))->createUser();
        }
        
        require_once "../app/view/users/ExampleCreateUser";
    }
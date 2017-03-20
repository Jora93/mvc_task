<?php
class SignupController {
    public $user;
    public function __construct() {
        if(isset($_POST) && !empty($_POST['user_name'])&& !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
            if($_POST['password'] == $_POST['confirm_password']){
                $params['user_name'] = $_POST['user_name'];
                $params['login']     = $_POST['login'];
                $params['password']  = $_POST['password'];
                $obj_user = new Database("users");
                $res = $obj_user->insertData($params);
                header("Location: /login");

            }
            
        } 
    }
}
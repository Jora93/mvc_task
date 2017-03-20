<?php
class LoginController {
    public function __construct() {
        if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])){
            $params = $_POST;
            $obj_user = new Database("users");
            $res = $obj_user->getDataWithParametrs($params);
            if($params['login'] == $res[0]['login'] && $params["password"] == $res[0]['password']){
                $user['id']        = $res[0]['id'];
                $user['user_name'] = $res[0]['user_name'];
                $_SESSION['id']    = $user['id'];
                $_SESSION['user_name'] = $user['user_name'];
                header("Location: /home");
            }
        } 
    }
}
<?php
class Route{
    function __construct() {
        $arg = $_SERVER['REQUEST_URI'];
        if(strlen($arg) > 1){
            $url = $arg;
            $url = rtrim($url, '/');
            $url = explode('/', $url);
            $file = '../controllers/'.$url[1].'Controller.php';
        }if(isset($file) && file_exists($file)){
            $controller_name = $url[1]."Controller";
            require_once $file;
            $controller = new $controller_name;
        }
        if(isset($controller, $url[2]) && method_exists($controller, $url[2]) && isset($url[2])){
            $method_name     = $url[2];
            $argument_name   = $url[3];
            $controller->$method_name($argument_name);
        }
        if(isset($controller, $url[2]) && method_exists($controller, $url[2])&& !isset($url[3])){
            $method_name     = $url[2];
            $controller->$method_name();
        }
    }
    function viewName($param) {
        $url = $param;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        if(!isset($url[1])){
            $view_name = "../views/login.php";
        }
        if(isset($url[1])){
            $file = '../controllers/'.$url[1].'Controller.php';
            if(file_exists($file)){
                $controller_name = $url[1];
                $view_name = "../views/".$url[1].".php";
            }else{
                $view_name = "view/error404.php";
            }
        }
        return $view_name;

    }
}



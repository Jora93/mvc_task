<?php
function ref_url(){
    $url = explode('/', $_SERVER['REQUEST_URI']);
    // var_dump($url);
    // var_dump(count($url));
    $path = array_slice($url, 1, count($url)-2);
    var_dump($path);
    return $path;
}
function loader_conte($name){
    $name = preg_split('/(?=[A-Z])/',$name);
    var_dump($name);
    if (empty($name[1])) {
        echo '<h4><spna style="color:red;">your class name dont have a spec name</span></h4>';
    }
    elseif ($name[1] == 'Controller') {
        echo "else if cont</br>";
        echo '../controller/'.$name[0].'.php';
        include '../controller/'.$name[0].'.php';
    }
    elseif ($name[1] == 'Model') {
        include '../model/'.$name[0].'.php';
    }
    elseif ($name[1] == 'View') {
        include '../view/'.$name[0].'.php';
    }
    
    else{
        echo '<h4><spna style="color:red;">fdgdfyour class name dont have a spec name</span></h4>';
    }
}
spl_autoload_register('loader_conte');
function routing($path){
    if (isset($path[2])) {
        $args = array_slice($path, 2);
        var_dump($args);
        // echo $path[0].'Controller';
        $controller_name = $path[0].'Controller';
        $controller_obj = new $controller_name;
        $controller_obj->$path[1]($args);
    }
    elseif (isset($path[1])) {
        $controller_name = $path[0].'Controller';
        $controller_obj = new $controller_name;
        $controller_obj->$path[1]();
    }
    elseif (isset($path[0])) {
        $controller_name = $path[0].'Controller';
        $controller_obj = new $controller_name;
        $controller_obj->index();
    }
    else{
        $controller_obj = new welcomeController;
        $controller_obj->index();
    }
}
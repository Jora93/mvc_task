<?php

echo "public.index.php <br><br><br>";

 
$pieces = explode("/", $_SERVER["REQUEST_URI"]);
$controller =$pieces[0];






print_r($pieces);

// if(substr($_SERVER["REQUEST_URI"], -1, 1) == "/"){
// 	$controller = substr($_SERVER["REQUEST_URI"],1,-1);
// }else{
// 	$controller = substr($_SERVER["REQUEST_URI"],1);
// };
// echo $controller;




function __autoload($controller) {
    $filename = "./". $controller .".php";
    include_once($filename);
}


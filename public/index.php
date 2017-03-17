<?php

echo "<h1>public.index.php </h1>";

// var_dump($_SERVER["REQUEST_URI"]);
	function slice(){
		if( !empty($_SERVER["REQUEST_URI"])){
			$explode = explode("/", $_SERVER["REQUEST_URI"]);
			$path = array_slice($explode, 1, count($explode)-2);
		}
		return $path;
	};

	
	function loader($name){
		$name = preg_split('/(?=[A-Z])/',$name);
		if ($name[1] = "Controller") {
			echo $name[0];
			include_once"../controller/$name[0].php";
		}elseif ($name[1] = "Model") {
			echo $name[0];
			include_once"../model/$name[0].php";
		}elseif ($name[1] = "View") {
			echo $name[0];
			include_once"../view/$name[0].php";
		}else{
	        echo '<h1>class dont found</h1>';
	    }

	}
	spl_autoload_register('loader');
	// $oobj = new welcomeController;
	
	function routing($path){
		if (isset($path[2])) {
			$args = array_slice($path, 2) ;
			$controller_name = $path[0]."Controller";
			$controller_obj = new $controller_name();
			$controller_obj->$path[1]($args);
		}elseif (isset($path[1])) {
			$method = array_slice($path, 1) ;
			$controller_name = $path[0]."Controller";
			$controller_obj = new $controller_name();
			$controller_obj->$path[1]();
		}elseif (isset($path[0])) {
			$method = array_slice($path, 1) ;
			$controller_name = $path[0]."Controller";
			$controller_obj = new $controller_name();
			$controller_obj->index();
		}else{
	        $controller_obj = new welcomeController;
	        $controller_obj->index();
	    }
	}	
	$path = slice();
	routing($path);

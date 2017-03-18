<?php
include 'models/Database.php';
include 'models/Select.php';
$obj = new Select('users');
$params['id'] = "1";
$params['user_name'] = "gago";
// $params[0] = ;
$res = $obj->getDataWithParametrs($params);
echo"<pre>";
print_r($res);
echo"</pre>";
?>
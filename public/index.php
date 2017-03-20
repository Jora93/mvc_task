<?php
session_start();
include '../models/DbConnect.php';
include '../models/Database.php';
include 'Route.php';
$param = $_SERVER['REQUEST_URI'];
$objRoute = new Route();
$viewName = $objRoute->viewName($param);
$obj = new Database('users');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php include_once 'view/header.php'; ?>
        <?php include_once $viewName;         ?>
        <?php include_once 'view/footer.php'; ?>
    </body>
</html>
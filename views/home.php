<?php
    include_once '../controllers/homeController.php';
?>

<div class="container">
<h1>Welcome Dear <?php print_r($_SESSION['user_name']); ?></h1>

<a href="/home/logout" class="btn btn-info" role="button">Logout</a>
</div>



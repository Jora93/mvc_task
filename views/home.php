<?php
    use SameerShelavale\PhpCountriesArray\CountriesArray;
    $countries = CountriesArray::get( 'alpha2', 'name' );
?>

<div class="container">
<h1>Welcome Dear <?php print_r($_SESSION['user_name']); ?></h1>

  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Countries list
    <span class="caret"></span></button>
    <ul class="dropdown-menu scr">
        
    <?php
    
    foreach ($countries as $key => $value) {
        echo '<li><a href="/holliday/getHollidays/'.$key.'">'.$value.'</a></li>';
    }
    ?>
        
  
    </ul>
  </div><br><br>

<a href="/home/logout" class="btn btn-info" role="button">Logout</a>

</div>



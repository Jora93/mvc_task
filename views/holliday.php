<div class="container">
    <h1>hollidays</h1>
    <?php
        if(!empty($_SESSION['holliday'])){

            foreach ($_SESSION['holliday'] as $key => $val) {

                print_r($key.' : ');
                print_r(' '.$val[0]['name']);
                echo '<br>';
            }       
        }else{
            
            echo '<h1>Sorry but we have not information about this Country</h1>';
        }
    ?>

<a href="/home/logout" class="btn btn-info" role="button">Logout</a>

</div>



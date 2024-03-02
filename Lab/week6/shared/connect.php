<?php
    
    // connection string use to connect to database
    $connect = mysqli_connect('localhost', 'root', 'root', 'http5225');

    // to check the response
    // echo '<pre>';
    // echo print_r($students); 
    // echo '</pre>';

    if(!$connect){
        die(mysqli_connect_error());
    }
?>
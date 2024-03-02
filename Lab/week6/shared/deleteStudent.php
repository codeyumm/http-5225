<?php
    
    if(isset($_GET['deleteStudent'])){
            // print_r($_POST);
    // Array ( [Firstname] => Priyam [Lastname] => DEsai [Marks] => 56 [ImageURL] => https://test.com )

        
        include('connect.php');

        $Id = $_GET['Id'];

        $query = "DELETE FROM students WHERE Id = '$Id' ";

        $isDeleted = mysqli_query($connect, $query);

        if( $isDeleted ){
            header('Location: ../index.php');
        } else {
            echo mysqli_error($connect);
        }
    
    } else {
        echo "You should not be here";
    }


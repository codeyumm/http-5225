<?php
    
    if(isset($_POST['addStudent'])){
            // print_r($_POST);
    // Array ( [Firstname] => Priyam [Lastname] => DEsai [Marks] => 56 [ImageURL] => https://test.com )

        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Marks = $_POST['Marks'];
        $ImageURL = $_POST['ImageURL'];
+
        include('connect.php');

        $query = "INSERT INTO students 
                (Firstname, Lastname, Marks, ImageURL) 
                VALUES 
                ('$Firstname', '$Lastname', '$Marks', '$ImageURL')";
    
        $student = mysqli_query($connect, $query);

        if( $student ){
            header('Location: ../index.php');
        } else {
            echo mysqli_error($connect);
        }
    } else {
        echo "You should not be here";
    }


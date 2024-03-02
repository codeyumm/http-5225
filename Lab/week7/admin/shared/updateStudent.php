<?php
    
    if(isset($_POST['updateStudent'])){
      

        $Id = $_POST['Id'];
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Marks = $_POST['Marks'];
        $ImageURL = $_POST['ImageURL'];

        include('connect.php');

        $query = "UPDATE students SET Firstname = '$Firstname', Lastname = '$Lastname', Marks = '$Marks', ImageURL = '$ImageURL' WHERE Id = '$Id'";


    
        $isUpadted = mysqli_query($connect, $query);

        if( $isUpadted ){
            header('Location: ../index.php');
        } else {
            echo mysqli_error($connect);
        }
    } else {
        echo "You should not be here";
    }


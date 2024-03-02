<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic db connection</title>
</head>
<body>
    
    <h1>DB connection</h1>

    <?php
    
            $host = "sql111.infinityfree.com";
            $username = "if0_35758787";
            $password = "BjYWisH2PpLalJ";
            $db = "if0_35758787_http5225";

            $connect = mysqli_connect($host, $username, $password, $db);

            $query = "SELECT * FROM students";

           // mysqli_query will execute query and returns the result
            $students = mysqli_query($connect, $query);



        // to check the response
        echo '<pre>';
        echo print_r($students); 
        echo '</pre>';
    
    ?>


</body>
</html>
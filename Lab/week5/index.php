<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Student Catalog
                </h1>
            </div>
        </div>
    </div>

    <?php
    
        // connection string use to connect to database
        $connect = mysqli_connect('localhost', 'root', 'root', 'http5225');

        // write a query to execute
        $query = 'SELECT * FROM students';

        // mysqli_query will execute query and returns the result
        $students = mysqli_query($connect, $query);



        // to check the response
        // echo '<pre>';
        // echo print_r($students); 
        // echo '</pre>';
    ?>

<div class="row mx-4 my-4">
    <?php
        

       
        foreach( $students as $student ){

           $customStyle = '';
           $result = '';

           if( $student['Marks'] > 50){
               $customStyle = 'success';
               $result = 'Passed';
       
           } else {
               $customStyle = 'danger';
               $result = 'Failed';
           }

            echo '    
            <div class="col-md-4 mb-4">
                <div class="card border border-'. $customStyle .' border-5" style="width: 18rem; ">
                    <img src="'. $student['ImageURL'] .'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title ">'. $student['Firstname'] . " " . $student['Lastname'] .'</h5>
                        <p class="card-text">Final exam marks</p>
                        <h4 class="card-title"> Marks : '. $student['Marks'] .' </h4>
                        <h4 class="card-title"> Grade : '. $student['Grade'] .' </h4>
                        
                        <a href="#" class="btn btn-'.$customStyle .'">'. $result .'</a>
                    </div>
                </div>    
            </div> ';
        }

       
    ?>
</div>


</body>
</html>
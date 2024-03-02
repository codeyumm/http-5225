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

<?php include('shared/nav.php'); ?>

<?php

    include('shared/connect.php');
    $Id = $_POST['Id'];
    $query = "SELECT * FROM students WHERE Id = $Id";

    $student = mysqli_query($connect, $query);
    $result = $student -> fetch_assoc();
    

?>


    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Update student's info
                </h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
        <form class="mx-4" method="POST" action="shared/updateStudent.php" >
 
        <input type="hidden" name="Id" id="Id" value="<?php echo $result['Id']?>">
            <div class="mb-3">
                    <label for="fname" class="form-label">First name</label>
                    <input type="text" class="form-control" id="fname" name="Firstname" value="<?php echo $result['Firstname']; ?>">
            </div>

            <div class="mb-3">
                    <label for="lname" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lname" name="Lastname"  value="<?php echo $result['Lastname']; ?>">
            </div>

            <div class="mb-3">
                    <label for="marks" class="form-label">Marks</label>
                    <input type="text" class="form-control" id="marks" name="Marks"  value="<?php echo $result['Marks']; ?>">
            </div>

            <div class="mb-3">
                    <label for="lname" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="lname" name="ImageURL"  value="<?php echo $result['ImageURL']; ?>">
            </div>

            <button type="submit" name="updateStudent"  class="btn btn-primary">Submit</button>
         </form>
        </div>
    </div>

</div>


</body>
</html>
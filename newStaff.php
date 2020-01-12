<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="icon" href="images/picTwentyNine.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="bootstrap/js/jquery-3.4.1.js">
    <link rel="stylesheet" href="bootstrap/js/popper.min.js">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/picTwentyNine.jpg" alt="picTwentyNine.jpg" width="200" height="150">
</div>
<hr>
<div class="heading">
    <h3 class="text-center">Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","emobilisdb");
    if (!$conn){
        die("Connection Error :" .mysqli_connect_error());
    }
    $idNumber=mysqli_real_escape_string($conn,$_POST['idNumber']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $position=mysqli_real_escape_string($conn,$_POST['position']);
    $department=mysqli_real_escape_string($conn,$_POST['dept']);
    $basicSal=mysqli_real_escape_string($conn,$_POST['bSal']);
    $sql="INSERT INTO `staffDetails`(`staff_id`, `id_Number`, `first_name`, `middle_name`, `last_name`, `gender`, `position`, `department`, `join_date`, `basic_salary`) 
VALUES (null,'$idNumber','$firstName','$middleName','$lastName','$gender','$position','$department',null,'$basicSal')";
    if ($conn->query($sql)==true){
        print"<p>New Staff Added Successfully.</p>";
        print "<a href='staff.php' class='btn btn-success'>Add New Staff</a>";
    }
    else{
        print "<p> New Staff not added.</p>";
        print "<a href='staff.php' class='btn btn-danger'>Try Again.</a>";
    }
    //Close the Connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>

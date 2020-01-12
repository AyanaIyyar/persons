<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Details</title>
    <link rel="icon" href="images/picTwentyNine.jpg" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="bootstrap/js/jquery-3.4.1.js">
    <link rel="stylesheet" href="bootstrap/js/popper.min.js">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/picTwentyNine.jpg" alt="picTwentyNine" width="200" height="150">
</div>
<hr>
<div class="heading">
    <h3 class="text-center">New Person</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","emobilisdb");
    if (!$conn){
        die("Connection error :" .mysqli_connect_error());
    }
    $staffID=mysqli_real_escape_string($conn,$_POST['staffID']);
    $idNumber=mysqli_real_escape_string($conn,$_POST['idNumber']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $position=mysqli_real_escape_string($conn,$_POST['position']);
    $department=mysqli_real_escape_string($conn,$_POST['dept']);
    $jDate=mysqli_real_escape_string($conn,$_POST['joinDate']);
    $basicSal=mysqli_real_escape_string($conn,$_POST['bSal']);
    $sql="UPDATE `staffDetails` SET `staff_id`='$staffID',`first_name`='$firstName',`middle_name`='$middleName',`last_name`='$lastName',`gender`='$gender',`position`='$position',`department`='$department',`join_date`='$jDate',`basic_salary`='$basicSal' WHERE `id_Number`='$idNumber'";
    if ($conn->query($sql)==true){
        print "<p>Staff Details Updated Successfully.</p>";
        print "<a href='staff.php' class='btn btn-outline-info'> New/Update Staff Details</a>";
    }
    else{
        print "<p>Staff Details not Updated .</p>";
        print "<a href='staff.php' class='btn btn-outline-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Success</title>
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
    <h3 class="text-center">Update Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","emobilisdb");
    if(!$conn){
        die("Connection Error :" .mysqli_connect_error());
    }
    //Remove SQL Injection(a vulnerability that puts data in the db at risk of hacking)
    //the LINK is $conn
    //$_Post is the ESCAPE STRING
    //data is stored in the variables b4 sending to the db
    $idPass=mysqli_real_escape_string($conn,$_POST['idPass']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $mStatus=mysqli_real_escape_string($conn,$_POST['mStatus']);
    $telephone=mysqli_real_escape_string($conn,$_POST['telNumber']);
    $emailAdd=mysqli_real_escape_string($conn,$_POST['emailAddress']);
    $birthDate=mysqli_real_escape_string($conn,$_POST['dateOfBirth']);
    $age=mysqli_real_escape_string($conn,$_POST['Age']);
    $nok=mysqli_real_escape_string($conn,$_POST['nextOfKin']);
    $nokTel=mysqli_real_escape_string($conn,$_POST['nokTelNumber']);
    $nokRShip=mysqli_real_escape_string($conn,$_POST['nokRelationship']);
    //Use $sql variable to Store the SQL UPDATE statement for MODIFYING the form data in
    // the database table persons
    //the single quotes
    //the id pass number identifies the record unqiuely and is the criteria(why is idPass_number placed after where?)
    $sql="UPDATE `persons` SET `first_name`='$firstName',`middle_name`='$middleName',`last_name`='$lastName',`gender`='$gender',`marital_status`='$mStatus',`tel_number`='$telephone',`email`='$emailAdd',`dob`='$birthDate',`age`='$age',`nok`='$nok',`nok_tel`='$nokTel',`nok_relationship`='$nokRShip' WHERE `idPass_number`='$idPass'";
    //Execute the query in $sql above
    if ($conn->query($sql)==true){
        print "<p>Personal Details Updated Successfully.</p>";
        print "<a href='persons.php' class='btn btn-success'> New/Update Personal Details</a>";
    }
    else{
        print "<p>Personal Details not updated.</p>";
        print "<a href='persons.php' class='btn btn-danger'>Try Again.</a>";
    }
    //Close the Connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>






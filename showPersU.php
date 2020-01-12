<?php
$conn=mysqli_connect("localhost","root","","emobilisdb");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
$idPassNo=mysqli_real_escape_string($conn,$_POST['idPass']);
$sql="SELECT * FROM persons WHERE idPass_number='$idPassNo'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Update Personal Details</title>
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
            <h3 class="text-center">Update Personal Details</h3>
        </div>
        <hr>
        <div class="container">
            <form action="updatePerson.php" method="post">
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>ID/Passport Number:</b></label>
                        <br>
                        <input type="text" name="idPass" class="form-control" placeholder="*ID/Passport Number Here" required value="<?php echo $row['idPass_number'];?>">
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>First Name:</b></label>
                        <br>
                        <input type="text" name="fName" class="form-control" placeholder="*First Name Here" required value="<?php echo $row['first_name'];?>">
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Middle Name:</b></label>
                        <br>
                        <input type="text" name="mName" class="form-control" placeholder="*Middle Name Here" required value="<?php echo $row['middle_name'];?>">
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Last Name:</b></label>
                        <br>
                        <input type="text" name="lName" class="form-control" placeholder="*Last Name Here" required value="<?php echo $row['last_name'];?>">
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Gender:</b></label>
                        <br>
                        <input type="text" name="gender" class="form-control" value="<?php echo $row['gender'];?>">
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Marital Status:</b></label>
                        <br>
                        <input type="text" name="mStatus" class="form-control" value="<?php echo $row['marital_status'];?>">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>Telephone:</b></label>
                        <br>
                        <input type="text" name="telNumber" class="form-control" placeholder="*Telephone Number Here" required value="<?php echo $row['tel_number'];?>">
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Email Address:</b></label>
                        <br>
                        <input type="email" name="emailAddress" class="form-control" placeholder="*Email Address Here" required value="<?php echo $row['email'];?>">
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Date of Birth:</b></label>
                        <br>
                        <input type="date" name="dateOfBirth" class="form-control" required value="<?php echo $row['dob'];?>">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>Age:</b></label>
                        <br>
                        <input type="number" name="Age" class="form-control" placeholder="*Age Here" required value="<?php echo $row['age'];?>">
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Next Of Kin(NOK):</b></label>
                        <br>
                        <input type="text" name="nextOfKin" class="form-control" placeholder="*NOK Here" required value="<?php echo $row['nok'];?>">
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>NOK Telephone Number:</b></label>
                        <br>
                        <input type="text" name="nokTelNumber" class="form-control" placeholder="*NOK Telephone Number Here" required value="<?php echo $row['nok_tel'];?>">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>NOK Relationship:</b></label>
                        <br>
                        <input type="text" name="nokRelationship" class="form-control" value="<?php echo $row['nok_relationship'];?>">
                        <br>
                    </div>
                    <div class="col-sm-8">
                        <hr>
                        <div class="buttons">
                            <button class="btn btn-warning" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </body>
        </html>



        <?php
    }
}
mysqli_close($conn);
?>

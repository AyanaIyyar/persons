<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persons</title>
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
    <form action="newPerson.php" method="post">
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>ID/Passport Number:</b></label>
                <br>
                <input type="text" name="idPass" class="form-control" placeholder="*ID/Passport Number Here" required>
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>First Name:</b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="*First Name Here" required>
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Middle Name:</b></label>
                <br>
                <input type="text" name="mName" class="form-control" placeholder="*Middle Name Here" required>
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Last Name:</b></label>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="*Last Name Here" required>
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Gender:</b></label>
                <br>
                <input type="radio" name="gender" value="Male" required>&nbsp;&nbsp;Male
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="Female" required>&nbsp;&nbsp;Female
                &nbsp;&nbsp;&nbsp;
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Marital Status:</b></label>
                <br>
                <select name="mStatus" id="" class="form-control" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separated">Separated</option>
                </select>
                <br>
            </div>
            </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Telephone:</b></label>
                <br>
                <input type="text" name="telNumber" class="form-control" placeholder="*Telephone Number Here" required>
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Email Address:</b></label>
                <br>
                <input type="email" name="emailAddress" class="form-control" placeholder="*Email Address Here" required>
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Date of Birth:</b></label>
                <br>
                <input type="date" name="dateOfBirth" class="form-control" required>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Age:</b></label>
                <br>
                <input type="number" name="Age" class="form-control" placeholder="*Age Here" required>
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Next Of Kin(NOK):</b></label>
                <br>
                <input type="text" name="nextOfKin" class="form-control" placeholder="*NOK Here" required>
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>NOK Telephone Number:</b></label>
                <br>
                <input type="text" name="nokTelNumber" class="form-control" placeholder="*NOK Telephone Number Here" required>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>NOK Relationship:</b></label>
                <br>
                <select name="nokRelationship" id="" class="form-control" required>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Uncle">Uncle</option>
                    <option value="Aunt">Aunt</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Other">Other</option>
                </select>
                <br>
            </div>
            <div class="col-sm-8">
                <hr>
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">Save</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="locatePersU.php" class="btn btn-info">Update</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>

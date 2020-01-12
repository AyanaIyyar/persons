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
    <form action="newStaff.php" method="post">
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Id Number:</b></label>
                <br>
                <input type="text" name="idNumber" class="form-control" placeholder="*ID Number Here">
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>First Name:</b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="*First Name Here">
                <br>
            </div>
            <div class="col-sm-4">
            <label for=""><b>Middle Name:</b></label>
            <br>
            <input type="text" name="mName" class="form-control" placeholder="*Middle Name Here">
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
                <input type="radio" name="gender" class="form-control">Male
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" class="form-control">Female
                &nbsp;&nbsp;&nbsp;
                <br>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Position:</b></label>
                <br>
                <select name="position" id="" class="form-control" required>
                    <option value="">=================</option>
                    <option value="Systems Administrator">Systems Administrator</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Front Office">Front Office</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Manager">Manager</option>
                    <br>
                </select>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Department</b></label>
                <br>
                <select name="dept" id="" class="form-control" required>
                    <option value="">=================</option>
                    <option value="Finance">Finance</option>
                    <option value="Administration">Administration</option>
                    <option value="Human Resource">Human Resource</option>
                    <br>
                </select>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Basic Salary:</b></label>
                <br>
                <input type="number" name="bSal" class="form-control" placeholder="*Enter Basic Salary Here" required>
            </div>
            <hr>
            <div class="col-sm-8">
                <hr>
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">Save</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="locStaffU.php" class="btn btn-info">Update</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>

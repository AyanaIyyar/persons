<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
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
    <h3 class="text-center">Search</h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="showPersU.php" method="post">
                <label for=""><b>ID/Passport Number : </b></label>
                <br>
                <input type="text" name="idPass" class="form-control" placeholder="*Enter ID/Passport Number Here" required>
                <hr>
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>

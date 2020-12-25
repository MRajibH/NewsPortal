<?php 
session_start();
if(isset($_SESSION['username']))
{
    header("location:conflict1.php");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
    <link rel="stylesheet" href="stylee.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

</head>

<body>
    <div class="login-box">
        <h2>Author Registration</h2>
        <form action="authorreg.php" method="POST">
            <div class="user-box">
                <input type="text" name="name" required="">
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="email" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="gender" required="">
                <label>Gender</label>
            </div>
            <div class="user-box">
                <input type="text" name="address" required="">
                <label>Address</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="password_confirm" required="">
                <label>Confirm Password</label>
            </div>

            <div>
                <input id="a" type="submit" value="submit">
                <a href="author_login.php"> Author?Login Here |</a>
                <a href="loginsinup.html"> Go Back</a>
            </div>


    </div>


    </form>
    </div>

</body>

</html>
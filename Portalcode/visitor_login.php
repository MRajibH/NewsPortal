<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylee.css">
    <!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
       
</head>

<body>
<?php
    if(!empty($_SESSION['message1']) && $_SESSION['message1']=="Registration successful")
   { 
       echo "<div class='alert alert-success'>
    <strong>Success!</strong> Registration successful. Login to continue</div>";
       
    }
    $_SESSION['message1']='';
  
  ?>

    <div class="login-box">
        <h2>Visitor Login</h2>
        <form action="visitorloginvali.php" method="POST">
            <div class="user-box">
                <input type="text" name="email" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <div>
                <input id="a" type="submit" value="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div><br>
             <a href="visitorreg.html">Not Registered?  Register Here |</a><br>
             <a href="loginsinup.html"> Go Back</a>
            <div>
</div>
        </form>
    </div>

</body>

</html>
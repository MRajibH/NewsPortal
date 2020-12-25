<?php
session_start();
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        
    
    </head>
    <body>
<?php

$db_connect = new mysqli('localhost','root','','project') or die('Error');

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$password = $_POST['password'];
$passwordc = $_POST['password_confirm'];
$retrive = "select  * from author where  email = '$email' ";

$result=$db_connect -> query($retrive) or die('Kisu akta jamela hoice');
$row =mysqli_num_rows($result); 
if($row==1)
{   
    echo "<div class='alert alert-danger'>
        <strong>ERROR!</strong> Registration . Email Taken </div>";
        echo "<a href='authorregform.php'> Register again </a>";
}
elseif($password != $passwordc)
    {
        echo "<div class='alert alert-danger''>
        <strong>ERROR!</strong> Registration failed. Password doesnot match</div>";
        echo "<a href='authorregform.php'> Register again </a>";

    }

else {
    $qurey = "Insert into author (name,email,gender,address,password)
      Values('$name','$email','$gender','$address','$password')";
      $db_connect -> query($qurey) or die("<div class='alert alert-danger' >
      <strong>ERROR!</strong> Registration fail. Email Taken</div>
      <button><a href='authorreg.html'> Register again </a></button>");
      $message = 'Registration successful';
      $_SESSION['message']=$message;
      
      header("location:author_login.php");
      
    } 
    
 ?>   

        
    </body>
    </html>

   




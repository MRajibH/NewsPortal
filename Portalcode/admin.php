<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    

<?php




$db_connect = new mysqli('localhost','root','','project') or die('Error');

$name = $_POST['username'];
$password = $_POST['password'];

$retrive = "select  * from admin where  username= '$name' && password='$password'";

$result=$db_connect -> query($retrive) or die('Kisu akta jamela hoice');
$row =mysqli_num_rows($result); 

if($row==1)
{   
    $_SESSION['username'] = $name;
    $_SESSION['usernam'] = $password;
    
    echo "Welcome $name , The administator, the Boss";
    header('location:home.php');
}
else {
 
    echo "<div class='alert alert-danger''>
    <strong>ERROR!Invalid credentials</strong> Login failed. </div>
    <a href='adminlogin.html'> Try Login Again </a>";
}
?>



</body>
</html>
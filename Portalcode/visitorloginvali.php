<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Login Error!404</title>
    <!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    
</body>
</html>
<?php




$db_connect = new mysqli('localhost','root','','project') or die('Error');

$email = $_POST['email'];
$password = $_POST['password'];
$retrive = "select  * from visitor where  email= '$email' && password='$password'";

$result=$db_connect -> query($retrive) or die('Not Able to connect to Database');
$row =mysqli_num_rows($result); 
while($rows=$result->fetch_assoc())
{  
    
    $_SESSION['visitor'] = $rows['name'];
    
}
if($row==1)
{   
    
    header('location:portalindex.php');
}
else {
    echo 'Invalid credentials'; 
    echo "<div class='alert alert-danger''>
    <strong>ERROR!</strong> Login failed. </div>";
    echo "<div class='alert alert-success'><a href='visitor_login.php'> Try Login Again </a></div>";
    echo "<div class='alert alert-success'> Not A Registered Author<a href='authorreg.html'><button> Resgiser</button> here </a></div>";
}

?>
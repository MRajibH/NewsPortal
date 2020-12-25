<?php
session_start();


$title = $_SESSION['title'];
$imgsrc=$_SESSION['image'];
$authorname=$_SESSION['authorname'];
$catagory=$_SESSION['catagory'];
$body=$_SESSION['body'];









//<!Inserting data into database>
$db_connect = new mysqli('localhost','root','','project') or die('Error');




$qurey = "Insert into activearticle (title,authorname,catagory,image,body)
      Values('$title','$authorname','$catagory','$imgsrc','$body')";
      $db_connect -> query($qurey);


      
    echo "<div class='alert alert-success'>
    <strong>Success</strong> Your aricle send to admin for approval ";
    echo "<a href='authorhome.php'>Click here </a> and wait for approval";
    echo "<br><a href='portalindex.php'>Or, Go to Home page </div>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Send Article to Admin</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	

</head>

<body>
      
</body>
</html>
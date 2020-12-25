<?php 
session_start();
if(!isset($_SESSION['username']))
{
	header('location:adminlogin.html');
}




$mtitle = $_SESSION['mtitle'];
$mauthorname = $_SESSION['mauthorname'];
$mcatagory = $_SESSION['mcatagory'];
$mimage =$_SESSION['mimage'];
$mbody = $_SESSION['mbody'];
$mid =$_SESSION['mpostid'];
echo $mid;
//<!Inserting data into database>
$db_connect = new mysqli('localhost','root','','project') or die('Error');

echo "db connected";

$qurey = "Insert into mainportal (mtitle,mauthorname,mcatagory,mimage,mbody)
      Values('$mtitle','$mauthorname','$mcatagory','$mimage','$mbody')";
      $db_connect -> query($qurey) or die("problem inserting");

      
  
      $qurey = "DELETE from activearticle where id=$mid";
      $db_connect -> query($qurey) or die("problem deleting");
      
      header("location:home.php");


?>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:adminlogin.html');
}

///deleting post using id that coming from session variable


$iddelete = $_SESSION['postdelete'];

//dbconnnection
$db_connect = new mysqli('localhost','root','','project') or die('Error');

echo "db connected";

$qurey = "DELETE from mainportal where mid=$iddelete";
      $db_connect -> query($qurey) or die("problem deleting");
      

      header("location:portalindex.php");

?>
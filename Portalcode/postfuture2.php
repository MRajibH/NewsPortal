<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:adminlogin.html');
}

///deleting post using id that coming from session variable


$id_to_be_deleted = $_SESSION['mpostid'];

//dbconnnection
$db_connect = new mysqli('localhost','root','','project') or die('Error');

echo "db connected";

$qurey = "DELETE from activearticle where id=$id_to_be_deleted";
      $db_connect -> query($qurey) or die("problem deleting");
      

      header("location:home.php");

?>
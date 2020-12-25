<?php
session_start();
if(empty($_SESSION['visitor']))
{
    header('location:portalindex.php');
}
$db_connect = new mysqli('localhost','root','','project') or die('Error');

$comment = $_POST['message'];
$visitorname =$_SESSION['visitor'];
$postid = $_SESSION['postid'];




    $qurey = "Insert into comments (postid,visitorname,comment)
      Values('$postid','$visitorname','$comment')";
      $db_connect -> query($qurey) or die("Cannot insert in db");
      
      echo'Comment Published Successfully';
     
      
      //header("location:viewpostmain.php");
      

    
 ?>   

        
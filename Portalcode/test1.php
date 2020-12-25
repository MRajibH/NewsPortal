<?php
 session_start();
 
 
    
    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "images/".$filename;  
    move_uploaded_file($tempname,$folder);         
            ///this is the preview after author submit the post
    echo "<h3><br><br> Preview </h3>    ";

    //echo $folder;
    echo "<h1>".$_POST['title'].'</h1><br>';
    echo "<img src='$folder' height='80%' width='auto' > ";
   
    echo "<br><br><h3> ".$_POST['authorname'].":Saff Reporter</h3><br>";
    echo "<h4>".$_POST['catagory']."</h4><br>";
    echo $_POST['body'];
    /// print_r( $_FILES['uploadfile']);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            text-align: left;
            margin: 20px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <form action='activearticle.php' method='POST'>
        <button>
            <input type="submit" name="submit">
            <?php 
            $_SESSION['title']=$_POST['title'];
            $_SESSION['image']=$folder;
            $_SESSION['authorname']=$_POST['authorname'];
            $_SESSION['catagory']=$_POST['catagory'];
            
            $_SESSION['body']=$_POST['body'];

            
            
            ?>
        </button>
    </form>
</body>

</html>
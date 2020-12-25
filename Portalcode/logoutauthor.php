<?php
 session_start();
 unset($_SESSION['ab']);
 echo"<div class='alert alert-warning' role='alert'>
 <strong>Well done!</strong> You successfully logout of the  system.
 <a href='author_login.php'>login again?</a>.
</div>";
header('location:portalindex.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Logout</title>
</head>
<body>
    
</body>
</html>
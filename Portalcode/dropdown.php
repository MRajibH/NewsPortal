<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
</body>
</html>



<?php

$mysqli =  new mysqli('localhost','root','','project') or die('Error');
$resultset = $mysqli->query("select name from author");
$color1="springgreen";
$color2="blue";
$color=$color1;
?>
<select name ="authorname">
<?php
while($rows=$resultset->fetch_assoc())
{  
    $color==$color1?$color=$color2:$color=$color1;
    $authorname = $rows['name'];
    echo "<option value = '$authorname' style='background:$color;'>$authorname</option>";
}

?></select>
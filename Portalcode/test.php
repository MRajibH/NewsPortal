<?php
session_start();
if(!isset($_SESSION['ab']))
 {
     header('location:author_login.php');
 }
error_reporting(0);

$aname=$_SESSION['ab'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Rajib</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

   
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

</head>

<body>
	<!-- Header -->
	<header id="header">
		<!-- Nav -->
		<div id="nav">
			<!-- Main Nav -->
			<div id="nav-fixed">
				<div class="container">
					<!-- logo -->
					<div class="nav-logo">
						<a href="portalindex.php" class="logo"><img src="./images/logo.png" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<ul class="nav-menu nav navbar-nav">
					
					<li class='cat-3'><a href="#">COVID-19</a></li>
					<li class='cat-2'><a href="#">Politics</a></li>
					<li class='cat-4'><a href="#">Bangladesh</a></li>
					<li class='cat-1'><a href="#">World</a></li>
					<li class='cat-3'><a href="#">Business</a></li>
					<li class='cat-4'><a href="#">Sports</a></li>
					<li class='cat-3'><a href="#">Jobs</a></li>
					<li class='cat-1'><a href="#">Lifestyle</a></li>
					<?php
					if(!empty($_SESSION['ab']))
					{
						echo "<li class='cat-2'><a href='logoutauthor.php'>Logout</a></li>";
						echo "<li class='cat-3'><a href='test.php'>+AddNews</a></li>";
					}
					if (!empty($_SESSION['username']))
					{
						echo "<li class='cat-2'><a href='logout.php'>Logout</a></li>";
					}
					if (!empty($_SESSION['visitor']))
					{
						echo "<li class='cat-2'><a href='logoutvisitor.php'>Logout</a></li>";
					}
					
					?>
						
					</ul>
					<!-- /nav -->

					<!-- aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<?php 
						if(!empty($_SESSION['ab']))
						{
							echo "<a href='authorhome.php'><i class='fa fa-fw fa-user'>$author</i> </a>";
						}
						elseif (!empty($_SESSION['username']))
						{
							echo "<a href='home.php'><i class='fa fa-fw fa-user'>$adminname</i> </a>";
						}
						elseif (!empty($_SESSION['visitor']))
						{
							echo "<a href='home.php'><i class='fa fa-fw fa-user'>$visitor</i> </a>";
						}
						
						else{
                          echo "<a href='loginsinup.html'><i class='fa fa-fw fa-user'>Login</i> </a>";
						}
						?>
						
					</div>
					<!--  aside toggle -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<!-- nav -->
				<div class="section-row">
					<ul class="nav-aside-menu">
						<li><a href="portalindex.php">Home</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="#">Join Us</a></li>
						<li><a href="#">Advertisement</a></li>
						<li><a href="contact.html">Contacts</a></li>
					</ul>
				</div>
				<!-- /nav -->

				

				<!-- social links -->
				<div class="section-row">
					<h3>Follow us</h3>
					<ul class="nav-aside-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
				<!-- /social links -->

				<!-- aside nav close -->
				<button class="nav-aside-close"><i class="fa fa-times"></i></button>
				<!-- /aside nav close -->
			</div>
			<!-- Aside Nav -->
		</div>
		<!-- /Nav -->
	</header>
	<!-- /Header -->



    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Add News Form</li>
                    </ul>
                    <h1>Add News</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    </header>
    <!-- /Header -->


    <div class="col-md-5 col-md-offset-1">
        <div class="section-row">
            <div style="color:white">
                <span>Hello</span>
            </div>
            <h3>Add your News Article</h3>
            <form action="test1.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <span>Title</span>
                            <input class="input" type="text" name="title" required>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="form-group">
                            <span>Author Name</span>
                            <br>
                            <?php

                                    $mysqli =  new mysqli('localhost','root','','project') or die('Error');
                                    $resultset = $mysqli->query("select name from author where name='$aname'");
                                    $color1="springgreen";
                                    $color2="white";
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
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <span>Catagory</span><br>
                            <?php

$mysqli =  new mysqli('localhost','root','','project') or die('Error');
$resultsetcat = $mysqli->query("select * from  catagory");
$color1="springgreen";
$color2="white";
$color=$color1;
?>
<select name ="catagory">
<?php
while($rowsc=$resultsetcat->fetch_assoc())
{  
    $color==$color1?$color=$color2:$color=$color1;
    $catname = $rowsc['catagoryname'];
    echo "<option value = '$catname' style='background:$color;'>$catname</option>";
}

?></select>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <form action="/action_page.php">
                                <label for="img">Select image:</label>
                                <input type="file" name="uploadfile" value="" required>
                                <input type="hidden" value="Upload">

                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <span>Body</span>
                            <textarea name="body"></textarea>
                            <script>
                                CKEDITOR.replace('body');
                            </script>


                            <button class="primary-button" type="submit" value="publish">Submit</button>


                        </div>
                    </div>



                </div>


            </form>
        </div>
    </div>
    </div>
    <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /section -->

</body>

</html>
<?php

    /*
    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "images/".$filename;  
    move_uploaded_file($tempname,$folder);         
            
    echo "<h3><br><br> Preview </h3>    ";

    //echo $folder;
    echo "<h1>".$_POST['title'].'</h1><br>';
    echo "<img src='$folder' height='30%' width='30%' > ";
   
    echo "<br><br><br><br><br><h3> ".$_POST['authorname'].":Saff Reporter</h3><br>";
    echo "<h4>".$_POST['catagory']."</h4><br>";
    echo $_POST['body'];
    /// print_r( $_FILES['uploadfile']);*/
    header('test1.php');
    
?>

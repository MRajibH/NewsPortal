<?php 
session_start();
$name = $_SESSION['ab'];
if(!isset($_SESSION['ab']))
{
	header('location:author_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />


	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	

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
					<li class='cat-3'><a href="#">Entertainment</a></li>
					<li class='cat-2'><a href="#">Politics</a></li>
					<li class='cat-4'><a href="#">Bangladesh</a></li>
					<li class='cat-1'><a href="#">World</a></li>
					<li class='cat-3'><a href="#">Business</a></li>
					<li class='cat-4'><a href="#">Sports</a></li>
					<li class='cat-3'><a href="#">Jobs</a></li>
					<?php if(!empty($_SESSION['ab']))
					{
						
						echo "<li class='cat-3'><a href='test.php'>+AddNews</a></li>";
					}?>
					<li class='cat-1'><a href="logoutauthor.php">Logout</a></li>
						
					</ul>
					<!-- /nav -->

					<!-- aside toggle -->
					<div class="nav-btns">
						<button class="cat-1"><i class="fa fa-bars"></i></button>
						<a href="authorhome.php"><i class="fa fa-fw fa-user"></i> <?php echo"$name";  ?></a>
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

			<!-- /Main Nav -->
           
		   
		   
		   
		   <?php
		       //database connection and retrive from db

				$mysqli =  new mysqli('localhost','root','','project') or die('Error');
				$resultset = $mysqli->query("select * from mainportal where mauthorname='$name'");
				
				?>
				
				<?php
				echo("<div class='section'>
				<!-- container -->
				<div class='container'>
				<div class='row'>
				<div class='col-md-12'>
					<div class='section-title'>
					<br><br>
						<h2>My Posts</h2>
					</div>
				</div>");
				$row =mysqli_num_rows($resultset); 
				if($row == 0)
				{
					echo "<h6>No post to show</h6>";
				}
   
				while($rows=$resultset->fetch_assoc())
				{  
						
						$publishdate = $rows['mpublishdate'];
						$title = $rows['mtitle'];
						$authorname = $rows['mauthorname'];
						$catagory = $rows['mcatagory'];
						$imgsrc = $rows['mimage'];
						$body = $rows['mbody'];
						$id = $rows['mid'];
						//storing inside session variable to use in post page
						
						

						//echo $folder;
					/*	echo "<h1>".$title.'</h1><br>';
						echo "<img src='$imgsrc' height='480px' width='auto' > ";
						echo "<br>Article submitted ON: $publishdate"."<br>";
						echo "<br><br><h3> ".$authorname.":Saff Reporter</h3><br>";
						echo "<h4>".$catagory."</h4><br>";
						echo $body;*/

				///<!display beautifully>
				


		echo("

				<!-- post -->
				<div class='col-md-4'>
					<div class='post'>
						<a  class='post-img' href='viewpostmain.php?id=$id'><img height=328px width=1200px	 src='$imgsrc' alt=''></a>
						<div class='post-body'>
							<div class='post-meta'>
								<a class='post-category cat-1' href='viewpostmain.php?id=$id'>$catagory</a>
								<span class='post-date'>$publishdate</span>
							</div>
							<h3 class='post-title'>
							<a href='viewpostmain.php?id=$id'>$title</a></h3>
						</div>
					</div>
				</div>");
				
               


				}
				

					?>
					


</body>

</html>
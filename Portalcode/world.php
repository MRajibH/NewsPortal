<?php

session_start();
$adminname= $_SESSION['username'];
$author=$_SESSION['ab'];
$visitor=$_SESSION['visitor'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>PSR News Bangladesh</title>

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
					
					<li class='cat-3'><a href="covid.php">COVID-19</a></li>
					<li class='cat-2'><a href="politics.php">Politics</a></li>
					<li class='cat-4'><a href="Bangladesh.php">Bangladesh</a></li>
					<li class='cat-1'><a href="world.php">World</a></li>
					<li class='cat-3'><a href="business.php">Business</a></li>
					<li class='cat-4'><a href="sports.php">Sports</a></li>
					<li class='cat-3'><a href="jobs.php">Jobs</a></li>
					<li class='cat-3'><a href="ent.php">Showbiz</a></li>
				
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
							echo "<a href='portalindex.php'><i class='fa fa-fw fa-user'>$visitor</i> </a>";
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
						<li><a href="#">About Us</a></li>
						<li><a href="#">Join Us</a></li>
						<li><a href="#">Advertisement</a></li>
						<li><a href="#">Contacts</a></li>
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

	

	<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">

					<h2>World News</h2>
						
					</div>
                </div>
                
                <!--Addding elements from mainportal to portal main index page-->
                <?php
		       //database connection and retrive from db

				$mysqli =  new mysqli('localhost','root','','project') or die('Error');
				$resultset = $mysqli->query("select * from mainportal where mcatagory='World' order by mid desc");
				
				?>
				
				<?php
				
				while($rows=$resultset->fetch_assoc())
				{  
						
						$publishdate = $rows['mpublishdate'];
						$title = $rows['mtitle'];
						$authorname = $rows['mauthorname'];
						$catagory = $rows['mcatagory'];
						$imgsrc = $rows['mimage'];
						$body = $rows['mbody'];
						$id = $rows['mid'];
						


		echo("

        <div class='col-md-4'>
        <div class='post'>
            <a class='post-img' href='viewpostmain.php?id=$id'><img  height=280px width=1200px src='$imgsrc' alt='image'></a>
            <div class='post-body'>
                <div class='post-meta'>
                    <a class='post-category cat-2' href='viewpostmain.php?id=$id'>$catagory</a>
                    <span class='post-date'>$publishdate</span>
                </div>
                <h3 class='post-title'><a href='viewpostmain.php?id=$id'>$title
                        </a></h3>
            </div>
        </div>
    </div>");
				
               


				}
				

					?>
				

				
                 
               
                
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	




	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-4">
					

					<!-- catagories -->
					<div class="aside-widget">
						<div class="section-title">
							<h2>Catagories</h2>
						</div>
						<div class="category-widget">
							
						</div>
					</div>
					<!-- /catagories -->

					<!-- tags -->
					<div class="aside-widget">
						<div class="tags-widget">
							<ul>
							
								<li><a href="covid.php">COVID-19</a></li>
								<li><a href="politics.php">Politics</a></li>
								<li><a href="Bangladesh.php">Bangladesh</a></li>
								<li><a href="world.php">World</a></li>
								<li><a href="business.php">Business</a></li>
								<li><a href="Sports.php">Sports</a></li>
								<li><a href="jobs.php">Jobs</a></li>
								<li><a href="ent.php">showbiz</a></li>
							</ul>
						</div>
					</div>
					<!-- /tags -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-5">
					<div class="footer-widget">
						<div class="footer-logo">
							<a  href="portalindex.html" class="logo"><img width=40% src="./images/logo.png" alt=""></a>
						</div>
						<ul class="footer-nav">
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Advertisement</a></li>
						</ul>
						<div class="footer-copyright">
							<span>&copy;
								
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved | This
								Webportal is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
									href="https://github.com/MRajibH">Rajib</a>
								</span>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6">
							<div class="footer-widget">
								<h3 class="footer-title">About Us</h3>
								<ul class="footer-links">
									<li><a href="portalindex.php">About Us</a></li>
									<li><a href="portalindex.php">Join Us</a></li>
									<li><a href="portalindex.php">Contacts</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-widget">
								<h3 class="footer-title">Catagories</h3>
								<ul class="footer-links">
                                
								<li><a href="covid.php">COVID-19</a></li>
								<li><a href="politics.php">Politics</a></li>
								<li><a href="Bangladesh.php">Bangladesh</a></li>
								<li><a href="world.php">World</a></li>
								<li><a href="business">Business</a></li>
								<li><a href="sports.php">Sports</a></li>
								<li><a href="jobs.php">Jobs</a></li>
								<li><a href="ent.php">showbiz</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="footer-widget">
						
						
	
					</div>
				</div>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /Footer -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
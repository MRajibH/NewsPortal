<?php 
error_reporting(0);
session_start();
if(!isset($_SESSION['username']))
{
	header('location:adminlogin.html');
}
if(isset($_GET['id']))
{
	$id = $_GET['id'];
}

//database connection and retrive from db

 $mysqli =  new mysqli('localhost','root','','project') or die('Error');
 $resultset = $mysqli->query("select * from activearticle where id=$id");
 while($rows=$resultset->fetch_assoc())
{ 
	$publishdate = $rows['publishdate'];
	$title = $rows['title'];
	$authorname = $rows['authorname'];
	$catagory = $rows['catagory'];
	$imgsrc = $rows['image'];
	$body = $rows['body'];

 }


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>POST VIEW	</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	

</head>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>WebMag HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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
						<a href="portalindex.php" class="logo"><img src="images/logo.png" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<ul class="nav-menu nav navbar-nav">
					<li><a href="#">Special News</a></li>
								<li><a href="#">COVID-19</a></li>
								<li><a href="#">Politics</a></li>
								<li><a href="#">Bangladesh</a></li>
								<li><a href="#">World</a></li>
								<li><a href="#">Business</a></li>
								<li><a href="#">Sports</a></li>
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Lifestyle</a></li>
					</ul>
					<!-- /nav -->

					
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Main Nav -->

			

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
        <!-- Page Header -->
		<div id="post-header" class="page-header">
			<div class="background-img" style="background-image: url('./img/post-page.jpg');"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-meta">
							<a class="post-category cat-2" href="category.html"><?php echo $catagory; ?></a>
							<span class="post-date"><?php echo $publishdate; ?></span>
						</div>
						<h1><?php echo $title; ?></h1>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
    </header>
    <!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Post content -->
				<div class="col-md-8">
					<div class="section-row sticky-container">
						<div class="main-post">
							<h3><?php echo $title ?></h3>
							<?php echo $body;?>
							<figure class="figure-img">
								<img class="img-responsive" src="<?php echo $imgsrc ?>" alt="">
								<figcaption><?php echo $title ?></figcaption>
							</figure>
							
						</div>
						<div class="post-shares sticky-shares">
							<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
							<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
							<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-envelope"></i></a>
						</div>
					</div>

					<!-- ad -->
					<div class="section-row text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-2.jpg" alt="">
						</a>
					</div>
					<!-- ad -->

					<!-- author -->
					<div class="section-row">
						<div class="post-author">
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="./img/author.png" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h3><?php echo $authorname?></h3>
									</div>
									<p>Desk Reporter<br>PSR News Bangladesh
									</p>
									<ul class="author-social">
										<li><a href="https://www.facebook.com/muhammadrajibhawlader"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/rajib_hawlader"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /author -->
					<!-- Admin aproval and discard button-->

                    
				<?php
				
				
				$_SESSION['mtitle'] =	$title;
				$_SESSION['mauthorname']	=$authorname;
				$_SESSION['mcatagory'] =	$catagory;
				$_SESSION['mimage'] =	$imgsrc;
				$_SESSION['mbody'] =	$body;
				$_SESSION['mpostid']=$id;
				?>




						<div class="form" >
							
						 <form action='postfuture1.php' method="post"> 
								<input style='background-color:black;color:white;' type="submit" name="button1"
										class="button1" value="Approve" /> 
								</form><br>
								<form action='postfuture2.php' method="post">
								<input style='background-color:red;color:white;' type="submit" name="button2"
										class="button2" value="Discard" /> 
							</form> 
					</nobr>
						</div>













					

					
				</div>
				<!-- /Post content -->

				<!-- aside -->
				<div class="col-md-4">
					<!-- ad -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /ad -->

					
				
				</div>
				<!-- /aside -->
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
							<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						<ul class="footer-nav">
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Advertisement</a></li>
						</ul>
						<div class="footer-copyright">
							<span>&copy;
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved | This
								template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
									href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6">
							<div class="footer-widget">
								<h3 class="footer-title">About Us</h3>
								<ul class="footer-links">
									<li><a href="about.html">About Us</a></li>
									<li><a href="#">Join Us</a></li>
									<li><a href="contact.html">Contacts</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-widget">
								<h3 class="footer-title">Catagories</h3>
								<ul class="footer-links">
									<li><a href="category.html">Web Design</a></li>
									<li><a href="category.html">JavaScript</a></li>
									<li><a href="category.html">Css</a></li>
									<li><a href="category.html">Jquery</a></li>
								</ul>
							</div>
						</div>
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
<?php 
error_reporting(0);
session_start();

if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
$_SESSION['postid']=$id;
//database connection and retrive from db

 $mysqli =  new mysqli('localhost','root','','project') or die('Error');
 $resultset = $mysqli->query("select * from mainportal where mid=$id ");
 while($rows=$resultset->fetch_assoc())
{ 
	$publishdate = $rows['mpublishdate'];
	$title = $rows['mtitle'];
	$authorname = $rows['mauthorname'];
	$catagory = $rows['mcatagory'];
	$imgsrc = $rows['mimage'];
	$body = $rows['mbody'];

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
					<!-- logo -->
					<div class="nav-logo">
						<a href="portalindex.php" class="logo"><img src="./images/logo.png" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<ul class="nav-menu nav navbar-nav">
					
					<li class='cat-3'><a href="covid.php">COVID-19</a></li>
					<li class='cat-2'><a href="politics.php">Politics</a></li>
					<li class='cat-4'><a href="bangladesh.php">Bangladesh</a></li>
					<li class='cat-1'><a href="world.php">World</a></li>
					<li class='cat-3'><a href="business.php">Business</a></li>
					<li class='cat-4'><a href="sports.php">Sports</a></li>
					<li class='cat-3'><a href="jobs.php">Jobs</a></li>
					<li class='cat-1'><a href="ent.php">Showbiz</a></li>
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
				<?php	if (!empty($_SESSION['username']))
					{
					 $_SESSION['postdelete']=$id;
				echo "<form action='postfuturemain.php' method='post'>
								<input style='background-color:red;color:white;' type='submit' name='button2'
										class='button2' value='Discard' /> 
							</form> ";}?>
					<div class='section-row'>
			<div class='section-title'>
				<h2>Comments</h2>
			</div>
				<?php	
				
	$commenttt = $mysqli->query("select * from comments where postid='$id' ");
	$row1 =mysqli_num_rows($commenttt); 
	if($row1==0)
	{
		echo"<div class='section-row'>
						<div class='section-title'>
							<h4> No Comment yet</h4>
						</div>
		</div>";
	}
	else{
		 while($row1=$commenttt->fetch_assoc())
			{ 
			$cpublishdate = $row1['publishdate'];
			$visitorname = $row1['visitorname'];
			$comment= $row1['comment'];
			


		echo 	"

			<div class='post-comments'>
				<!-- comment -->
				<div class='media'>
					<div class='media-left'>
						<img class='media-object' src='./img/avatar.png' alt=''>
					</div>
					<div class='media-body'>
						<div class='media-heading'>
							<h4>$visitorname </h4>
							<span class='time' style='color:green;'>$cpublishdate</span>
							
						</div>
						<p style='color:green;'>$comment
						</p>

						
					</div>
				</div>";










 			} }
 ?>

					<!-- comments -->
					
	<?php						
       if(!empty($_SESSION['visitor']))
							
		{	echo	"<div class='section-row'>
						<div class='section-title'>
							<h2>Comment Here</h2>
							
						</div>
						<form class='post-reply' action='comment.php' Method='POST'>
							<div class='row'>
								
								<div class='col-md-12'>
									<div class='form-group'>
										<textarea class='input' name='message' placeholder='Comment'></textarea>
									</div>
									<button class='primary-button'>Submit</button>
								</div>
							</div>
						</form>
					</div> "; }
			

    ?>

					

					
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
							<a  href="portalindex.php" class="logo"><img width=40% src="./images/logo.png" alt=""></a>
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
									href="#">Rajib</a>
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
									<li><a href="#">About Us</a></li>
									<li><a href="#">Join Us</a></li>
									<li><a href="#">Contacts</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-widget">
								<h3 class="footer-title">Catagories</h3>
								<ul class="footer-links">
                                <li><a href="portalindex.php">Special News</a></li>
								<li><a href="covid.php">COVID-19</a></li>
								<li><a href="politics.php">Politics</a></li>
								<li><a href="bangladeshh.php">Bangladesh</a></li>
								<li><a href="world.php">World</a></li>
								<li><a href="business.php">Business</a></li>
								<li><a href="sports.php">Sports</a></li>
								<li><a href="jobs.php">Jobs</a></li>
								<li><a href="ent.php">Showbiz</a></li>
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
<?php require('../psychcare/controllers/session_controller.php');?>

<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
	<div id="colorlib-page">

  <!-- Facebook and Twitter integration -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PSYCHCARE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<center>
								<a href="#">
								<img src="images/logo-landscape.png" width="250" height="130">
							</center>
						</div>
					</div>
				</div>
			</div>
		<div id="colorlib-work">
			<div class="container-fluid"> 
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>Hello, <?php echo $_SESSION['student_FN']; ?> Choose your Categories</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 animate-box text-center">
						<a href="category_disorder.php" class="work-img" style="background-image: url(images/md.jpg);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-user"></i></span>
								<p class="tag"><span>You Talk, We Listen</span></p>
								<h3>Psychological Disorder</h3>
								<span class="read-more">Begin! <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
					
					<div class="col-md-3 animate-box text-center">
						<a href="category_dream.php" class="work-img" style="background-image: url(images/dream1.jpg);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-cloud"></i></span>
								<p class="tag"><span>Welcome to Dreamland</span></p>
								<h3>Interpretation of Dreams</h3>
								<span class="read-more">Begin! <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>

					<div class="col-md-3 animate-box text-center">
						<a href="category_learner.php" class="work-img" style="background-image: url(images/learner.jpg);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-eye"></i></span>
								<p class="tag"><span>What's your learning style?</span></p>
								<h3>Types of Learner</h3>
								<span class="read-more">Begin! <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>

					<div class="col-md-3 animate-box text-center">
						<a href="category_personality.php" class="work-img" style="background-image: url(images/person3.jpg);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-smile"></i></span>
								<p class="tag"><span>Know yourself even more</span></p>
								<h3>Personality Test</h3>
								<span class="read-more">Begin! <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>	
	</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>


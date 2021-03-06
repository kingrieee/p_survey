<?php require('../psychcare/controllers/session_controller.php');?>
<?php unsetSesh();?>


<!DOCTYPE HTML>
<html>
	<head>
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

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="../psychcare/index.php">Dashboard</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a href="index.php"><img src="images/logo-landscape.png" width="250" height="130"></a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
				<li style="background-image: url(images/cover_img_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Welcome to PSYCHCARE</h2>
				   					<h1>You Share , We Care</h1>
										<button type="button" name="autoclick"  id="autoclick" class="btn btn-primary mb-1" data-toggle="modal" data-target="#staticModal">
											<i class="fa fa-user"></i> Let's Get Started!
										</button>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/dreams1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Welcome to Dreamland</h2>
				   					<h1>Interpretation of Dreams</h1>
										<button type="button" name="autoclick"  id="autoclick" class="btn btn-primary mb-1" data-toggle="modal" data-target="#staticModal">
											<i class="fa fa-user"></i> Let's Get Started!
										</button>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/learn1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>What's your learning style?</h2>
				   					<h1>Types of Learner</h1>
										<button type="button" name="autoclick"  id="autoclick" class="btn btn-primary mb-1" data-toggle="modal" data-target="#staticModal">
											<i class="fa fa-user"></i> Let's Get Started!
										</button>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/personality1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Know yourself even more</h2>
				   					<h1>Personality Test</h1>
										<button type="button" name="autoclick"  id="autoclick" class="btn btn-primary mb-1" data-toggle="modal" data-target="#staticModal">
											<i class="fa fa-user"></i> Let's Get Started!
										</button>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/pd.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>You Talk , We Listen</h2>
				   					<h1>Psychological Disorder</h1>
										<button type="button" name="autoclick"  id="autoclick" class="btn btn-primary mb-1" data-toggle="modal" data-target="#staticModal">
											<i class="fa fa-user"></i> Let's Get Started!
										</button>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>What is Psychcare?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon"><i class="icon-pen3"></i></span>
							<div class="desc">
								<p>Is a Psychological Surveying System.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon"><i class="icon-diamond"></i></span>
							<div class="desc">
								<p>Has four main categories to choose.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon"><i class="icon-smile"></i></span>
							<div class="desc">
								<p>To determine your true personality.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon"><i class="icon-params"></i></span>
							<div class="desc">
								<p>To check your levels of stress, anxiety, or sadness</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon"><i class="icon-moon"></i></span>
							<div class="desc">
								<p>To explain &amp; understand your dreams</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon"><i class="icon-bulb"></i></span>
							<div class="desc">
								<p>To know the different ways of learning</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services" class="colorlib-counters">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2></h2>	
							<p>When a person is free of depression, anxiety, excessive stress and other psychological problems, that person is abler to live life to the fullest and creates beautiful memories to share. Society today’s society is looking for existential support for the people who have mental health problems and wish to eradicate such problems. There are many reasons why a person should stop ignoring mental health problems given such as, better physical health, improved productivity, financial stability, less stress, and finally a long, happier life.
							</p>
							<p>This is where PsychCare comes in; a system that functions as a determinant for students who has no knowledge of personality type, kind of learner, dreamer, and especially what mental problem a student carry. The system processes a series of questions that will render results and these results will be handled by the counsel offered. The researchers aim to help students who have suffered long enough from mental health problems and create a system that helps students who are afraid to reach out to counsel.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-blog">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>Your Developers</h2>
					</div>
				</div>
				<div class="row">
					<div class="blog-flex">
						<a href="#" class="one-forth blog-img animate-box" style="background-image: url(images/blog-1.jpg);">
						</a>
						<div class="three-forth">
							<div class="row">
								<div class="col-md-6">
									<a href="#" class="f-blog animate-box">
										<center>
											<p class="meta"><span>Louie Jay P. Albarico</span> | <span>BS ICT</span></p>
											<img src="images/louie.jpg" width="160" height="150"/>
												<p class="meta"><span>Web Developer</span>
										</center>
									</a>
									<a href="#" class="f-blog animate-box">
										<center>
											<p class="meta"><span>Jhon Lerrie C. Garrido</span> | <span>BS ICT</span></p>
											<img src="images/lerrie.jpg" width="160" height="150"/>
												<p class="meta"><span>Front-End Developer</span>
										</center>
									</a>
								</div>
								<div class="col-md-6">
									<a href="#" class="f-blog animate-box">
										<center>
											<p class="meta"><span>Anton Mikel C. Kintanar</span> | <span>BS ICT</span></p>
											<img src="images/anton.jpg" width="160" height="150"/>
												<p class="meta"><span>Backend Developer</span>
										</center>
									</a>
									<a href="#" class="f-blog animate-box">
										<center>
											<p class="meta"><span>Darlene Fely D. Guaca</span> | <span>BS ICT</span></p>
											<img src="images/darlene.jpg" width="160" height="150"/>
												<p class="meta"><span>Front-End Developer</span></p>
										</center>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md m-t-100" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticModalLabel">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
					
					<div class="modal-footer"> 
					<form method="POST" action="../psychcare/controllers/login_controller.php">
						<div class="col-sm-12 col-md-12">
						<div class="form-group mb-30">
							<p align="left">Id Number</p>
							<input type="text" name="student_ID" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Id Number" required>
						</div>
						</div>
						<div class="col-sm-12 col-md-12">
						<div class="form-group mb-30">
							<p align="left">Password</p>
							<input type="password" name="student_Password" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Password" required>
							<br>
							<input type="submit" name="getStarted" class="btn btn-main" value="Log In">
						</div>
						</div>
					</form>
		  			</div>
				</div>
			</div>
		</div>		
		<!--End of Modal -->

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-pb-sm">
							<div class="row">
								<div class="col-md-10">
									<h2>Psychcare</h2>
									<p>A Psychological Surveying System for the Department of Computer and Information Sciences.</p>
									<div class="row">
										<div class="col-md-6">
											<p>You Talk, We Listen</p>
										</div>
										<div class="col-md-6">
											<p>Know Yourself More</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-pb-sm">
							<h2>Reminder</h2>
							<p>The mind is like a "Parachute" it doesn't work unless it's "Open".</p>
							<div class="subscribe text-center">
								<div class="form-group">
									<input type="text" class="form-control text-center" placeholder="Enter Email address">
									<input type="submit" value="Subscribe" class="btn btn-primary btn-custom">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-pb-sm right-display">
							<h2>Follow Us</h2>
							<p class="colorlib-social-icons colorlib-social-icons2">
								<a href="#"><i class="icon-facebook4"></i></a>
								<a href="#"><i class="icon-twitter3"></i></a>
								<a href="#"><i class="icon-googleplus"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
							</p>
							<p>
								<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br></span> 
								<span class="block">Demo Images: <a href="http://nothingtochance.co/" target="_blank">nothingtochance.co</a> <a href="http://unsplash.co/" target="_blank">Unsplash</a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
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


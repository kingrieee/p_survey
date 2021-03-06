<?php
    session_start();
    include('db_connect.php');

    $query="SELECT * FROM anxiety_data";
    $result = mysqli_query($sql, $query);
    $counter = 1;
?> 
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
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="category_disorder.php"><i class="glyphicon glyphicon-arrow-left"></i></a> 
						</div>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/anxiety.jpg);">
			   		<div class="overlay">
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<center>
										<img src="images/icons-mental.png" width="10" height="10">
									</center>
				   					<h1>Anxiety Test</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

	<body>
		<div id="colorlib-counter" class="colorlib-counters">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center intro-heading">
						<h2>Questions</h2>
							<table class="table table-striped table-hover" id="anxiety">
								<thead>
			                        <tr style="font-size: 20px">
				                        <th style="padding-right: 20px">&nbsp</th>
   									    <th style="padding-right: 20px">&nbsp</th>
   									    <th style="padding-right: 20px">&nbsp</th>
   									    <th style="padding-right: 20px">Everytime</th>
			                        	<th style="padding-right: 20px">Often</th>
			                        	<th style="padding-right: 20px">Sometimes</th>
			                        	<th style="padding-right: 20px">Rarely</th>
			                       		<th style="padding-right: 20px">Never</th>

			                    	</tr>
		                    	</thead>
		                    	<tbody>
		                    		<?php while ($row=mysqli_fetch_array($result)) {?>
	                    				<tr style="font-size: 15px">
	                    					<td scope="col-md-10"><?php echo $counter ++; ?></td>
	                    					<td scope="col-md-10 "><?php echo $row['anxiety_questions'] ?></td>
	                    					<td scope="col-md-10 "><?php echo $row['anxiety_choices'] ?></td>
	                    					<td scope="col" align="center"><input type="radio" name="anxiety" id="" value="1"></td>
                                    		<td scope="col" align="center"><input type="radio" name="anxiety" id="" value="2"></td>
                                    		<td scope="col" align="center"><input type="radio" name="anxiety" id="" value="3"></td>
                                    		<td scope="col" align="center"><input type="radio" name="anxiety" id="" value="4"></td>
                                    		<td scope="col" align="center"><input type="radio" name="anxiety" id="" value="5"></td>
	                    				</tr>	
	                    			<?php } ?>
		                    	</tbody>
	                        </table>
	                </div>    
	            </div>
	        </div>              
		</div>
	</body>

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
						</div>
					</div>
				</div>
			</div>
		</footer>

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
	
</html>

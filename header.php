<!DOCTYPE html>
<html lang="en">
<head>
<title>Massage Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- css files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/prettySticky.css" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //js files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js --> 
</head>
<body>
	<!-- banner -->
	<div id="home" class="rsbanner">
		<div class="banner-info">
			<!-- navigation -->
			<div class="top-nav">
				<nav>
					<div class="container">
						<div class="navbar-header logo">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1><a href="index.php">Health Care</a></h1>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-right">
								<li><a href="index.php" class="link-kumya active scroll"><span data-letters="Home">Home</span></a></li>
								<li><a href="about.php" class="link-kumya"><span data-letters="About">About</span></a></li>	
								<li><a href="contact.php" class="link-kumya"><span data-letters="Contact">Contact</span></a></li>
								<li><a href="#" class="link-kumya"><span data-letters="Login">Login/Registration</span></a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>
					</div>
				</nav>
			</div>	
			<!-- //navigation -->
			<div class="banner-text">
				<!-- banner Slider starts Here -->
				<script src="js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 3
					  $("#slider3").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
				</script>
				<!-- //End-slider-script -->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="bnr-agileinfo">
								<h2>You wanna get a new look from us</h2>	
								<h3>Lorem Ipsum was popularised In sit amet sapien eros Integer dolore magna aliqua Temporibus autem quibusdam</h3>	
								<div class="rslsmore">
									<a href="#booking" class="button-pipaluk button--inverted">Book Now</a>
								</div>	
							</div>	
						</li>
						<li>
							<div class="bnr-agileinfo">
								<h4>Tex2</h4>	
								<h3>lpsum was popularised autem quibusdam</h3>	
								<div class="rslsmore">
									<a href="#booking" class="button-pipaluk button--inverted"> Book Now</a>
								</div>	
							</div>	
						</li>
						<li>
							<div class="bnr-agileinfo">
								<h4>Text3</h4>	
								<h3>Lorem Ipsum was popularised In sit amet sapien eros Integer dolore magna aliqua </h3>	
								<div class="rslsmore">
									<a href="#booking" class="button-pipaluk button--inverted">Book Now</a>
								</div>	
							</div>	
						</li>
					</ul>
				</div>
			</div>	
		</div>
	</div>
	<!-- //banner -->
	
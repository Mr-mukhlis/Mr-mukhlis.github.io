<?php
$output = '';
$input  = '';
$no_wa = 6282331769421;
	if (!empty($_POST)) {
		$input = $_POST ['command'];
		$output = 'nama kamu adalah '.$input;
	}

?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Noah Template</title>
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

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

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
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
							<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="services.php">Services</a></li>
							<!-- <li><a href="work.html">Work</a></li>
							<li><a href="blog.html">Blog</a></li> -->
							<li class="active"><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2 class="head-title">Works</h2>
						<a href="images/work-1.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-1.jpg);">
							<span><i class="icon-search3"></i></span>
						</a>
						<a href="images/work-2.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-2.jpg);">
							<span><i class="icon-search3"></i></span>
						</a>
						<a href="images/work-3.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-3.jpg);">
							<span><i class="icon-search3"></i></span>
						</a>
						<a href="images/work-4.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-4.jpg);">
							<span><i class="icon-search3"></i></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.php"><span>Mukhlis FR</span><span>   </span></a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<div id="colorlib-about">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">About</h2>
				</div>
				<div class="row row-padded-bottom">
					<div class="col-md-5 animate-box">
						<img class="img-responsive about-img" src="images/mukhlis.jpg" alt="html5 bootstrap template by colorlib.com">
					</div>
					<div class="col-md-6 col-md-push-1 animate-box">
						<div class="about-desc">
							<h2><span>Mukhlis Fitroh</span><span>Romadhon</span></h2>
							<div class="desc">
								<div class="rotate">
									<h2 class="heading">About</h2>
								</div>
								<p>A Fresh Graduate graduate of Information Technology. always use data for
									make decisions, look for opportunities to develop talents, able to adapt
									quickly and has a very high curiosity to learn new things, able to work together
									well, have a spirit of discipline, and time management. <a href="#">flows by their place</a> </p>
								<p class="colorlib-social-icons">
									<a href="#"><i class="icon-facebook4"></i></a>
									<a href="#"><i class="icon-twitter3"></i></a>
									<a href="#"><i class="icon-googleplus"></i></a>
									<a href="#"><i class="icon-dribbble2"></i></a>
								</p>
								<?php  echo	$output?>
								<p><a href="https://wa.me/<?php echo $no_wa?>?text=hai Kak saya ingin ....." target="_blank" class="btn btn-primary btn-outline">Contact Me </a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
					</div>
					<div class="col-md-4 animate-box">
						<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
					</div>
					<div class="col-md-4 animate-box">
						<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-services">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Goals</h2>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="services-flex">
							<div class="one-third">
								<div class="row">
									<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
										<span>Target</span>
										<h2>Goals</h2>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="rotate">
											<h2 class="heading">Goals</h2>
										</div>
									</div>
									<div class="col-md-12">
										<div class="services animate-box">
											<h3>1 - High Quality Theme</h3>
											<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										</div>
										<div class="services animate-box">
											<h3>2 - Customer Satisfaction</h3>
											<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										</div>
										<div class="services animate-box">
											<h3>3 - Well Mentained Sites</h3>
											<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="one-forth services-img" style="background-image: url(images/services-img.jpg);">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-testimony">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Testimonies</h2>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
						<span>Testimonies</span>
						<h2>Clients Says</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="rotate">
							<h2 class="heading">Says</h2>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="owl-carousel">
						<div class="item">
							<div class="col-md-12 text-center">
								<div class="testimony">
									<blockquote>
										<p>"A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										<span>" &mdash; George Brooks</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-12 text-center">
								<div class="testimony">
									<blockquote>
										<p>"Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										<span>" &mdash; Daniel Foster</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-12 text-center">
								<div class="testimony">
									<blockquote>
										<p>"When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</p>
										<span>" &mdash; Liam Jenkins</span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-pb-sm">
							<div class="row">
								<div class="col-md-10">
									<h2>Let's Talk</h2>
									<p>A small river named Duden flows by their place and supplies.</p>
									<p><a href="#">noah@info.com</a></p>
									<p class="colorlib-social-icons">
										<a href="#"><i class="icon-facebook4"></i></a>
										<a href="#"><i class="icon-twitter3"></i></a>
										<a href="#"><i class="icon-googleplus"></i></a>
										<a href="#"><i class="icon-dribbble2"></i></a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-pb-sm">
							<h2>Latest Blog</h2>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-1.jpg);"></a>
								<div class="desc">
									<span>February 15, 2018</span>
									<h3><a href="#">Art Gallery in Japan</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-2.jpg);"></a>
								<div class="desc">
									<span>February 9, 2018</span>
									<h3><a href="#">A Japanese Constellation</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-3.jpg);"></a>
								<div class="desc">
									<span>February 15, 2018</span>
									<h3><a href="#">Road Trip</a></h3>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-pb-sm">
							<h2>Newsletter</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia</p>
							<div class="subscribe text-center">
								<div class="form-group">
									<input type="text" class="form-control text-center" placeholder="Enter Email address">
									<input type="submit" value="Subscribe" class="btn btn-primary btn-custom">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart4" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>


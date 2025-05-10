<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Epic Store</title>
	<meta charset="UTF-8">
	<meta name="description" content="Epic Store">
	<meta name="keywords" content="Store, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>



</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="home.php">
				<img src="img/Epic Store logo.png" alt="">
			</a>
			<div class="user-panel">
				<?php if (!isset($_SESSION['user_id'])): ?>
					<a href="login.php">Login</a> / <a href="register.php">Register</a>
				<?php else: ?>
					<a href="logout.php">Logout</a>
				<?php endif; ?>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="game-review.php">Games</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="community.php">Community</a></li>
					<li><a href="store.php">Store</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->




	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/5.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Contact</h2>
						<p>Reach out for inquiries, support, or feedback. Whether through phone, email, we provide personalized assistance, ensuring quick responses to concerns, product information, or service requests for a smooth and helpful experience.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section spad contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="comment-title">Contact us</h4>
					<p>Reach out for inquiries, support, or feedback.</p>
					<div class="row">
						<div class="col-md-9">
							<ul class="contact-info-list">
								<li><div class="cf-left">Address</div><div class="cf-right">C block, Road no. 2, House no. 36, Bosundhara R/A, Bangladesh</div></li>
								<li><div class="cf-left">Phone</div><div class="cf-right">+880 1736 508859</div></li>
								<li><div class="cf-left">E-mail</div><div class="cf-right">rownak63@gmail.com</div></li>
							</ul>
						</div>
					</div>
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Leave a Reply</h4>
						<form class="comment-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Name">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="Email">
								</div>
								<div class="col-lg-12">
									<input type="text" placeholder="Subject">
									<textarea placeholder="Message"></textarea>
									<button class="site-btn btn-sm">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->


	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/Epic Store logo.png" alt="">
						<p>Epic Store provides game reviews, purchases, and community features, offering exclusive titles, free games, and discounts for players worldwide.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">February 28, 2025</div>
									<p>FIFA 25 </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">February 22, 2025</div>
									<p>NFS HEAT </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">February 8, 2025</div>
									<p>APEX LEGENDS </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Top Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Minhazur Sabbir</a> <span>on</span>  FIFA 25</p>
									<div class="tc-date">March 03, 2025</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/2.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Soumic Shariar</a> <span>on</span>  Apex Legends</p>
									<div class="tc-date">March 06, 2025</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/3.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Rahatul Islam</a> <span>on</span>  NFS Heat</p>
									<div class="tc-date">March 07, 2025</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/4.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Amimul Ehsan</a> <span>on</span>  Rainbow Six Siege</p>
									<div class="tc-date">March 10, 2025</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="home.php">Home</a></li>
				<li><a href="game-review.php">Games</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="community.php">Community</a></li>
				<li><a href="store.php">Store</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>


    </body>
</html>
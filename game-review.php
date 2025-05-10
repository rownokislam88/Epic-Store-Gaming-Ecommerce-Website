<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
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


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest Games</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">new</span>EA SPORTS FC™ 25 </div>
				<div class="nt-item"><span class="strategy">strategy</span>StarCraft II</div>
				<div class="nt-item"><span class="racing">Action</span>Apex Legends</div>
				<div class="nt-item"><span class="racing">racing</span>Need for Speed Heat </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Game reviews</h2>
						<p>A game review evaluates a video game's gameplay, graphics, story, mechanics, and overall experience. It highlights strengths, weaknesses, and unique features, helping players decide if it's worth playing. Reviews often cover performance, innovation, replayability, and comparisons to similar games.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section review-page spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/5.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Overwatch Halloween</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>Overwatch Halloween event features spooky-themed skins, limited-time game modes, and Junkenstein's Revenge, a co-op mode with eerie challenges and rewards.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/6.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Grand Theft Auto</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>Grand Theft Auto is an open-world action series featuring crime, exploration, intense missions, engaging stories, and endless player freedom.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/7.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Avatar</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>Avatar Frontiers of Pandora is an open-world adventure game featuring stunning visuals, immersive storytelling, aerial combat, and exploration of Pandora's landscapes.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/8.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Anthem</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>Anthem is a sci-fi action RPG with stunning visuals, co-op gameplay, and customizable exosuits but suffered from repetitive missions and content.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/9.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Cyberpunk 2077</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>Cyberpunk 2077 is an open-world RPG featuring a gripping story, deep customization, futuristic combat, and a richly detailed cyberpunk city.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/10.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Spiderman</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>Spider Man is an action-packed open-world game with fluid web-slinging, engaging combat, emotional storytelling, and stunning visuals.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-4">
				<button class="site-btn btn-sm">Load More</button>
			</div>
		</div>
	</section>
	<!-- Page section end -->


	<!-- Review section -->
	<section class="review-section review-dark spad set-bg" data-setbg="img/review-bg-2.jpg">
		<div class="container">
			<div class="section-title text-white">
				<div class="cata new">new</div>
				<h2>Recent Reviews</h2>
			</div>
			<div class="row text-white">
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/1.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h5>Assasin's Creed</h5>
							<p>Assassin's Creed is a stealth-action game blending history and parkour, featuring epic assassinations and rich storytelling.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/2.jpg">
							<div class="score purple">9.5</div>
						</div>
						<div class="review-text">
							<h5>Doom</h5>
							<p>DOOM is a fast-paced, brutal first-person shooter featuring intense combat, demons, powerful weapons, and adrenaline-pumping action.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/3.jpg">
							<div class="score green">9.1</div>
						</div>
						<div class="review-text">
							<h5>Overwatch</h5>
							<p>Overwatch is a team-based hero shooter with diverse characters, strategic gameplay, unique abilities, and fast-paced action.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/4.jpg">
							<div class="score pink">9.7</div>
						</div>
						<div class="review-text">
							<h5>GTA</h5>
							<p>GTA 5 is an open-world crime adventure with engaging storytelling, thrilling heists, diverse gameplay, and multiplayer mayhem.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


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
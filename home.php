<?php
session_start();
if (!isset($_SESSION['user_id'])) {
	header("Location: login.php");
	exit;
}
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
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />



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
			<!-- User Panel -->
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
					<li class="d-md-none"><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Header section end -->
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/rainow.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>The Best <span>Games</span> Out There</h2>
						<p>Rainbow Six Siege is a tactical 5v5 shooter focused on strategy, teamwork, and destruction. <br> Players choose unique Operators with special abilities, battling in attack vs. defense scenarios.<br>With destructible environments, precise gunplay, and deep strategy, Siege offers intense <br>skill-based gameplay that evolves with constant updates and a competitive esports scene.</p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/delta.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>The Best <span>Games</span> Out There</h2>
						<p>Delta Force is a tactical military shooter known for large maps, realistic combat, and strategic gameplay. <br> Originally released in 1998, it featured long-range engagements and special forces missions. <br>The upcoming Delta Force: Hawk Ops revives the series with modern graphics, large-scale battles, and objective-based multiplayer warfare.</p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


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


	<!-- Feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/fc25.jpg">
						<span class="cata new">new</span>
						<div class="fi-content text-white">
							<h5><a href="#">EA SPORTS FC™ 25</a></h5>
							<p>EA SPORTS FC™ 25 is the latest football simulation game, featuring HyperMotionV technology for realistic animations</p>
							<a href="#" class="fi-comment">1575 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/star_craft.jpg">
						<span class="cata strategy">strategy</span>
						<div class="fi-content text-white">
							<h5><a href="#">Star Craft II</a></h5>
							<p>StarCraft is a real-time strategy game where players control Terrans, Zerg, or Protoss, managing resources and commanding armies. </p>
							<a href="#" class="fi-comment">541 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/apexlegends.jpg">
						<span class="cata new">action</span>
						<div class="fi-content text-white">
							<h5><a href="#">Apex Legends</a></h5>
							<p>Apex Legends is a free-to-play battle royale game where squads of players fight to be the last standing.</p>
							<a href="#" class="fi-comment"> 1754 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/nfs_heat.jpg">
						<span class="cata racing">racing</span>
						<div class="fi-content text-white">
							<h5><a href="#">NFS Heat</a></h5>
							<p>Need for Speed Heat is an open-world racing game featuring street races, customization, and a day-night cycle with intense police chases.</p>
							<a href="#" class="fi-comment">1289 Comments</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature section end -->


	<!-- Recent game section  -->
	<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
		<div class="container">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2>Recent Games</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/hqdefault.jpg">

						</div>
						<div class="rgi-content">
							<h5>Lords of the Fallen</h5>
							<p>Lords of the Fallen is an action role-playing game where players, as Dark Crusaders, battle demonic forces in a dark fantasy world. </p>
							<a href="#" class="comment">664 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/Spider.jpg">

						</div>
						<div class="rgi-content">
							<h5>Marvel's Spider-Man 2 </h5>
							<p>Marvel's Spider-Man 2 is an action-adventure game where Peter Parker and Miles Morales confront new threats, including Venom. </p>
							<a href="#" class="comment">870 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/Forza.jpg">

						</div>
						<div class="rgi-content">
							<h5>Forza Horizon 5</h5>
							<p>Forza Horizon 5 is an open-world racing game set in Mexico, featuring stunning visuals and diverse terrains.</p>
							<a href="#" class="comment">1442 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Recent game section end -->



	<!-- Tournaments section -->
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Tournaments</div>
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>Rainbow Six Siege</h4>
								<ul>
									<li><span>Tournament Beggins:</span> jan 20, 2025</li>
									<li><span>Tounament Ends:</span> March 01, 2025</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $20000, 2nd place: $10000, 3rd place: $5000</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tournament-item">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/2.jpg"></div>
							<div class="ti-text">
								<h4>APEX LEGENDS</h4>
								<ul>
									<li><span>Tournament Beggins:</span> January 22, 2025</li>
									<li><span>Tounament Ends:</span> February 25, 2025</li>
									<li><span>Participants:</span> 16 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $20000, 2nd place: $10000, 3rd place: $5000</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tournaments section bg -->


	<!-- Review section -->
	<section class="review-section spad set-bg" data-setbg="img/review-bg.png">
		<div class="container">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2>Recent Reviews</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/1.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h5>Assasin’’s Creed</h5>
							<p>Assassin’s Creed is a stealth-action game blending history and parkour, featuring epic assassinations and rich storytelling.</p>
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
										<p><a href="#">Minhazur Sabbir</a> <span>on</span> FIFA 25</p>
										<div class="tc-date">March 03, 2025</div>
									</div>
								</div>
								<div class="tc-item">
									<div class="tc-thumb set-bg" data-setbg="img/authors/2.jpg"></div>
									<div class="tc-content">
										<p><a href="#">Soumic Shariar</a> <span>on</span> Apex Legends</p>
										<div class="tc-date">March 06, 2025</div>
									</div>
								</div>
								<div class="tc-item">
									<div class="tc-thumb set-bg" data-setbg="img/authors/3.jpg"></div>
									<div class="tc-content">
										<p><a href="#">Rahatul Islam</a> <span>on</span> NFS Heat</p>
										<div class="tc-date">March 07, 2025</div>
									</div>
								</div>
								<div class="tc-item">
									<div class="tc-thumb set-bg" data-setbg="img/authors/4.jpg"></div>
									<div class="tc-content">
										<p><a href="#">Amimul Ehsan</a> <span>on</span> Rainbow Six Siege</p>
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
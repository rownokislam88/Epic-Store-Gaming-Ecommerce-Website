<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Epic Storee</title>
	<meta charset="UTF-8">
	<meta name="description" content="Epic Store">
	<meta name="keywords" content="warrior, game, creative, html">
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
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Community</h2>
						<p>A gaming community is a group of players who share a passion for video games, connecting through online forums, social media, and multiplayer platforms. It provides a space for discussions, sharing tips, strategies, fan creations, organizing events, and building friendships, creating a sense of belonging within the gaming world.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section community-page set-bg" data-setbg="img/community-bg.jpg">
		<div class="community-warp spad">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="community-top-title">All Members (344)</h3>
					</div>
				</div>

				<ul class="community-post-list">
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/1.jpg"></div>
							<div class="post-content">
								<h5>Minhazur Sabbir<span>posted an update</span></h5>
								<div class="post-date">March 03, 2025</div>
								<p>Just finished an intense session of EA SPORTS FC 25! ⚽🔥 The gameplay is smoother than ever, and the new FC IQ system makes every match feel strategic. From 5v5 Rush Mode to Ultimate Team, there's so much to explore. Can't get enough of the new tactics and fresh visual upgrades—every match is a blast! 😎Anyone else diving deep into the world of FC 25? Let's squad up and hit the pitch! 💥 </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/8.jpg"></div>
							<div class="post-content">
								<h5>Tasnim Islam Rifa<span>posted an update</span></h5>
								<div class="post-date">March 01, 2025</div>
								<p> Just finished playing Overwatch's Halloween Terror event, and it was an absolute blast! The spooky skins, eerie maps, and limited-time modes really brought the Halloween spirit alive. 🎃👻 Whether you're battling against creepy enemies in Junkenstein's Revenge or enjoying the spooky vibes, it's the perfect way to celebrate the season. I love how the event always brings new fun and excitement. Don't miss out! 🎮🕸️ </p>
								<div class="attachment-file">
									<img src="img/attachment.jpg" alt="">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/5.jpg"></div>
							<div class="post-content">
								<h5>Sarah Islam<span>posted an update</span></h5>
								<div class="post-date">February 21, 2025</div>
								<p>Just finished another wild session in Grand Theft Auto V! From insane car chases to crazy heists, this game never disappoints. Whether I'm cruising through the streets of Los Santos or causing some epic mayhem, the fun never ends! The world feels alive, and the possibilities are endless. Can't get enough of the high-speed action and unforgettable moments. Who's ready to team up for some more chaos? Let's make the city ours!💥🚗 </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/2.jpg"></div>
							<div class="post-content">
								<h5>Soumic Shariar<span>posted an update</span></h5>
								<div class="post-date">March 02, 2025</div>
								<p>Just had an amazing match in Apex Legends! Teamwork was on point, and the competition was fierce. We pulled off some insane plays and secured that sweet win! 🔥💥Shoutout to my squad for bringing their A-game—nothing beats a well-coordinated victory. Can't wait for the next round of chaos! 😎👊 </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/4.jpg"></div>
							<div class="post-content">
								<h5>Amimul Ehsan<span>posted an update</span></h5>
								<div class="post-date">January 14, 2025</div>
								<p>💥 Tactical gameplay at its finest! 💥 Just wrapped up an intense session of Rainbow Six Siege, and the action was 🔥! From strategic breaches to heart-pounding hostage rescues, this game never disappoints. Whether it's coordinating with teammates or clutching those last-minute wins, the thrill is unmatched. Can't wait for the next round! Who's ready to dive into the chaos? 👀💣 </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/6.jpg"></div>
							<div class="post-content">
								<h5>Tanzed Hossian Siam<span>posted an update</span></h5>
								<div class="post-date">March 10, 2025</div>
								<p>I Just finished an epic session of Anthem and wow, the world of Bastion never ceases to amaze! 🌍💥 The stunning visuals, adrenaline-pumping combat, and customizable Javelin suits make every mission feel unique. From battling terrifying enemies to exploring beautiful landscapes, it's an unforgettable experience. 💪🔥 Looking forward to more epic moments with my squad! 🚀 </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/7.jpg"></div>
							<div class="post-content">
								<h5>Iffat Ara Joarder<span>posted an update</span></h5>
								<div class="post-date">March 14, 2025</div>
								<p>Exploring Night City like never before! 🌆💥 Cyberpunk 2077 is a wild ride filled with action, heart-pounding missions, and unforgettable characters. The world-building is insane, and the story keeps you on the edge of your seat. Definitely recommend if you love immersive RPGs! 🔥🚗 </p>
							</div>
						</div>
					</li>
				</ul>
				<div class="site-pagination sp-style-2">
					<span class="active">01.</span>
					<a href="#">02.</a>
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
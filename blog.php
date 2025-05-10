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
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Blog</h2>
						<p>A gaming blog explores video games, industry news, reviews, and player tips. It covers trends, upcoming releases, and in-depth analysis, engaging gamers with insightful content, discussions, and community interactions while offering guides, opinions, and updates on the ever-evolving gaming world.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/Forza.jpg">
								</div>
								<div class="rgi-content">
									<h5>Forza Horizon 5</h5>
									<p>A Forza Horizon 5 blog covers the game's stunning open-world Mexico setting, diverse cars, racing events, and seasonal challenges. It provides updates, gameplay tips, car customization guides, and community highlights, keeping players informed about new content, expansions, and exciting in-game experiences.</p>
									<a href="#" class="comment">1547 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/hqdefault.jpg">
								</div>
								<div class="rgi-content">
									<h5>Lords of the fallen </h5>
									<p>LA Lords of the Fallen blog covers gameplay mechanics, lore, tips, and updates on this dark fantasy action RPG. It explores boss strategies, character builds, hidden secrets, and community discussions, offering insights for both new players and seasoned fans of the game. </p>
									<a href="#" class="comment">754 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/Spider.jpg">
								</div>
								<div class="rgi-content">
									<h5>Spiderman </h5>
									<p>A Spider-Man game blog explores gameplay, story, and mechanics, covering titles like Marvel's Spider-Man and Miles Morales. It includes reviews, updates, tips, and discussions about web-slinging action, villains, open-world exploration, and the evolution of Spider-Man in gaming history. </p>
									<a href="#" class="comment">1245 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/titanfall.jpg">
								</div>
								<div class="rgi-content">
									<h5>Titanfall</h5>
									<p>Titanfall is a fast-paced FPS featuring fluid parkour, intense gunplay, and powerful Titans. This blog explores its gameplay, story, multiplayer mechanics, and impact on the genre, providing insights, tips, and updates for fans of the thrilling sci-fi shooter series. </p>
									<a href="#" class="comment">1610 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/minecraft.jpg">
								</div>
								<div class="rgi-content">
									<h5>Minecraft </h5>
									<p>A Minecraft game blog explores updates, builds, mods, and gameplay tips. It covers survival strategies, creative projects, Redstone guides, and community creations while keeping players informed on new features, events, and the endless possibilities within Minecraft's blocky, open-world universe. </p>
									<a href="#" class="comment">2212 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>

						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/farcry.jpg">
								</div>
								<div class="rgi-content">
									<h5>Far Cry</h5>
									<p>A Far Cry game blog dives into the franchise's open-world adventures, intense storytelling, and tactical combat. It covers game reviews, character analysis, tips, and secrets, keeping fans updated on new releases, expansions, and the evolving world of Far Cry.</p>
									<a href="#" class="comment">1469 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>

						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/7.jpg">
								</div>
								<div class="rgi-content">
									<h5>Pubg</h5>
									<p>A PUBG game blog covers battle royale strategies, updates, weapons, maps, and gameplay tips. It provides news on events, patch notes, esports tournaments, and community discussions, helping players improve skills, stay updated, and engage with the evolving PUBG gaming experience. </p>
									<a href="#" class="comment">2178 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>

						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/delta.jpg">
								</div>
								<div class="rgi-content">
									<h5>Delta Force </h5>
									<p>A Delta Force game blog covers the iconic tactical shooter series, featuring news, updates, gameplay tips, and strategy guides. It explores the franchise's history, multiplayer tactics, and the latest on Delta Force: Hawk Ops, keeping fans engaged with in-depth discussions and insights. </p>
									<a href="#" class="comment">1888 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<div class="site-pagination">
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">
					<!-- widget -->
					<div class="widget-item">
						<form class="search-widget">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>

					<!-- widget -->
					<div class="widget-item">
						<div class="feature-item set-bg" data-setbg="img/recent-game/cyberpunk.jpg">
							<div class="fi-content text-white">
								<h5><a href="#">Cyberpunk</a></h5>
								<p>A Cyberpunk game blog covers news, updates, reviews, and guides on Cyberpunk 2077 and the cyberpunk genre. It explores game mechanics, story expansions, mods, and community discussions, keeping fans informed about the latest patches, DLCs, and futuristic gaming trends. </p>
								<a href="#" class="fi-comment">1532 Comments</a>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<div class="feature-item set-bg" data-setbg="img/recent-game/amongus.jpg">
							<div class="fi-content text-white">
								<h5><a href="#">Among Us</a></h5>
								<p>Among Us is a popular multiplayer game of deception and teamwork. Players work together to complete tasks while impostors sabotage and eliminate crewmates. A blog dedicated to Among Us shares strategies, tips, updates, fan theories, and news about the game's evolving content. </p>
								<a href="#" class="fi-comment">2775 Comments</a>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<div class="feature-item set-bg" data-setbg="img/recent-game/battle.jpg">
							<div class="fi-content text-white">
								<h5><a href="#">Battlefield</a></h5>
								<p>A Battlefield game blog focuses on the latest updates, strategies, and news surrounding the Battlefield series. It covers gameplay tips, weapon guides, map analysis, new releases, community events, and in-depth reviews, helping players enhance their experience in this intense, tactical shooter series. </p>
								<a href="#" class="fi-comment">2544 Comments</a>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<div class="feature-item set-bg" data-setbg="img/recent-game/csgo.jpg">
							<div class="fi-content text-white">
								<h5><a href="#">Counter Strike 2 </a></h5>
								<p>A Counter-Strike 2 game blog covers the latest updates, strategies, tips, and news about the popular tactical shooter. It offers guides, gameplay analysis, competitive scene insights, and community events, keeping fans informed and engaged with this fast-paced, skill-driven multiplayer game. </p>
								<a href="#" class="fi-comment">3148 Comments</a>
							</div>
						</div>
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
									<p><a href="#">Minhazur Rahman</a> <span>on</span>  FIFA 25</p>
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
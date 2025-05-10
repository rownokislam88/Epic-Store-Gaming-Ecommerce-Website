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

	
	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/2.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Store</h2>
						<p>A game store is a retail or online platform offering video games, consoles, accessories, and digital downloads. It provides new and pre-owned titles across various genres, along with discounts, pre-orders, and exclusive content for gamers of all preferences and platforms.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->

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
	
	<!--CSS-->
		<style>
			body {
				font-family: Arial, sans-serif;
				background-color: #f4f4f4;
				margin: 0;
				padding: 0;
			}
	
			.store-container {
				width: 80%;
				margin: 0 auto;
				padding: 20px;
				background-color: #fff;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}
	
			h1 {
				text-align: center;
				color: #333;
			}
	
			.games-list {
				display: flex;
				justify-content: space-around;
				flex-wrap: wrap;
			}
	
			.game {
				background-color: #f9f9f9;
				border: 1px solid #ddd;
				padding: 20px;
				margin: 10px;
				width: 30%;
				text-align: center;
			}
	
			.game img {
				max-width: 100%;
				height: auto;
				border-radius: 10px;
			}
	
			.game h2 {
				margin: 10px 0;
				color: #555;
			}
	
			.game p {
				font-size: 1.2em;
				color: #333;
			}
	
			.game button {
				background-color: #28a745;
				color: white;
				border: none;
				padding: 10px 20px;
				cursor: pointer;
				font-size: 1em;
			}
	
			.game button:hover {
				background-color: #218838;
			}
	
			.cart {
				margin-top: 30px;
				padding: 20px;
				background-color: #f9f9f9;
				border: 1px solid #ddd;
			}
	
			.cart h2 {
				margin: 0;
				color: #555;
			}
	
			#cart-items {
				list-style-type: none;
				padding: 0;
			}
	
			#cart-items li {
				padding: 10px;
				border-bottom: 1px solid #ddd;
			}
	
			#cart-total {
				font-weight: bold;
				color: #333;
			}
	
			.checkout-button {
				background-color: #007bff;
				color: white;
				border: none;
				padding: 10px 20px;
				cursor: pointer;
				font-size: 1em;
				margin-top: 10px;
			}
	
			.checkout-button:hover {
				background-color: #0056b3;
			}
	
			.checkout-form {
				margin-top: 20px;
				padding: 20px;
				background-color: #f1f1f1;
				border: 1px solid #ddd;
				border-radius: 5px;
				display: none; /* Hidden by default */
			}
	
			.checkout-form input,
			.checkout-form select {
				width: 100%;
				padding: 10px;
				margin: 10px 0;
				border: 1px solid #ddd;
				border-radius: 5px;
				font-size: 1em;
			}
	
			.checkout-form button {
				background-color: #28a745;
				color: white;
				border: none;
				padding: 10px 20px;
				cursor: pointer;
				font-size: 1em;
				width: 100%;
			}
	
			.checkout-form button:hover {
				background-color: #218838;
			}
	
			.checkout-message {
				margin-top: 20px;
				padding: 10px;
				background-color: #d4edda;
				color: #155724;
				border: 1px solid #c3e6cb;
				border-radius: 5px;
				display: none; /* Hidden by default */
			}
		</style>
	<!--END--CSS-->

	<!--Add to cart-->
		<div class="store-container">
			<h1>Welcome to the Game Store</h1>
			<div class="games-list">
				<!-- Game 1 -->
				<div class="game">
					<img src="img/games/1.jpg" alt="Game 1">
					<h2>EA SPORTS FC™ 25</h2>
					<p>$70.00</p>
					<button onclick="addToCart('EA SPORTS FC™ 25', 20)">Add to Cart</button>
				</div>
				<!-- Game 2 -->
				<div class="game">
					<img src="img/games/2.jpg" alt="Game 2">
					<h2>Apex Legends</h2>
					<p>$39.00</p>
					<button onclick="addToCart('Apex Legends', 30)">Add to Cart</button>
				</div>
				<!-- Game 3 -->
				<div class="game">
					<img src="img/games/3.jpg" alt="Game 3">
					<h2>Need For Speed Heat</h2>
					<p>$49.99</p>
					<button onclick="addToCart('Need For Speed Heat', 25)">Add to Cart</button>
				</div>
				<!-- Game 4 -->
				<div class="game">
					<img src="img/games/4.jpg" alt="Game 4">
					<h2>Rainbow Six Siege</h2>
					<p>$25.00</p>
					<button onclick="addToCart('Rainbow Six Siege', 25)">Add to Cart</button>
				</div>
				<!-- Game 5 -->
				<div class="game">
					<img src="img/games/5.jpg" alt="Game 5">
					<h2>Marvels Spider-Man</h2>
					<p>$60.00</p>
					<button onclick="addToCart('Marvels Spider-Man', 25)">Add to Cart</button>
				</div>
				<!-- Game 6 -->
				<div class="game">
					<img src="img/games/6.jpg" alt="Game 6">
					<h2>Grand Theft Auto V</h2>
					<p>$20.00</p>
					<button onclick="addToCart('Grand Theft Auto V', 25)">Add to Cart</button>
				</div>
				<!-- Game 7 -->
				<div class="game">
					<img src="img/games/7.jpg" alt="Game 7">
					<h2>Anthem</h2>
					<p>$18.00</p>
					<button onclick="addToCart('Anthem', 25)">Add to Cart</button>
				</div>
				<!-- Game 8 -->
				<div class="game">
					<img src="img/games/8.jpg" alt="Game 8">
					<h2>Cyberpunk 2077</h2>
					<p>$99.00</p>
					<button onclick="addToCart('Cyberpunk 2077', 25)">Add to Cart</button>
				</div>
				<!-- Game 9 -->
				<div class="game">
					<img src="img/games/9.jpg" alt="Game 9">
					<h2>Overwatch</h2>
					<p>$25.00</p>
					<button onclick="addToCart('Overwatch', 25)">Add to Cart</button>
				</div>
			</div>
			<!--End add to cart-->

			<!-- Checkout -->
			<div class="cart">
				<h2>Your Cart</h2>
				<ul id="cart-items"></ul>
				<p>Total: $<span id="cart-total">0.00</span></p>
				<button class="checkout-button" onclick="showCheckoutForm()">Checkout</button>
				<div id="checkout-form" class="checkout-form">
					<h3>Checkout Details</h3>
					<input type="text" id="name" placeholder="Your Name" required>
					<input type="text" id="address" placeholder="Your Address" required>
					<input type="tel" id="mobile" placeholder="Your Mobile Number" required>
					<select id="payment-method" required>
						<option value="">Select Payment Method</option>
						<option value="bKash">bKash</option>
						<option value="Nagad">Nagad</option>
						<option value="Rocket">Rocket</option>
						<option value="Bank">Bank</option>
					</select>
					<button onclick="processCheckout()">Confirm Purchase</button>
				</div>
				<div id="checkout-message" class="checkout-message">Thank you for your purchase!</div>
			</div>
		</div>
		<!-- End Checkout -->
	

	<!--java script-->
		<script>
			let cart = [];
			let total = 0;
	
			function addToCart(gameName, price) {
				cart.push({ name: gameName, price: price });
				total += price;
				updateCart();
			}
	
			function updateCart() {
				const cartItems = document.getElementById('cart-items');
				const cartTotal = document.getElementById('cart-total');
	
				// Clear the current cart items
				cartItems.innerHTML = '';
	
				// Add each item to the cart
				cart.forEach(item => {
					const li = document.createElement('li');
					li.textContent = `${item.name} - $${item.price.toFixed(2)}`;
					cartItems.appendChild(li);
				});
	
				// Update the total
				cartTotal.textContent = total.toFixed(2);
			}
	
			function showCheckoutForm() {
				if (cart.length === 0) {
					alert("Your cart is empty. Add some games before checking out!");
					return;
				}
	
				// Show the checkout form
				const checkoutForm = document.getElementById('checkout-form');
				checkoutForm.style.display = 'block';
			}
	
			function processCheckout() {
				const name = document.getElementById('name').value;
				const address = document.getElementById('address').value;
				const mobile = document.getElementById('mobile').value;
				const paymentMethod = document.getElementById('payment-method').value;
	
				if (!name || !address || !mobile || !paymentMethod) {
					alert("Please fill out all fields before confirming your purchase.");
					return;
				}
	
				// Show the checkout message
				const checkoutMessage = document.getElementById('checkout-message');
				checkoutMessage.style.display = 'block';
	
				// Clear the cart and form
				cart = [];
				total = 0;
				updateCart();
				document.getElementById('checkout-form').style.display = 'none';
				document.getElementById('name').value = '';
				document.getElementById('address').value = '';
				document.getElementById('mobile').value = '';
				document.getElementById('payment-method').value = '';
	
				// Hide the message after 3 seconds
				setTimeout(() => {
					checkoutMessage.style.display = 'none';
				}, 3000);
			}
		</script>
		<!--java script-->



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
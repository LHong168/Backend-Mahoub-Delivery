<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login To | Mahoub Delivey</title>
		<link rel="stylesheet" href="../styles.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<script src="../nav.js" defer></script>
		<!-- <script src="../gallery.js" defer></script> -->
		<script src="../darkmode.js" defer></script>
		<link rel="icon" href="../media/logo/mahoubLogo3.png" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
			rel="stylesheet"
		/>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	</head>
	<body>

		<?php include_once 'header.php';?>

		<main>
			<div id="hero-image">
				<!-- Placeholder for CSS -->
			</div>

			<?php include "../include/menu/resDsc.inc.php";?>

			<div class="menu-main flex">
				<div class="menuItem">
					<h1>Menu</h1>

					<?php include "../include/menu/item.inc.php"?>
	
				</div>

				<div class="checkout">
					<h1 id="checkoutH1">CHECKOUT</h1>
	
					<div>
						<h2>My Order <span id="count">0 items</span></h2>
					</div>
	
					<div class="item">
	
						<div class="flex1">
							<h2>Items: </h2>
							<button onclick="removeItem()" id="clearButton">Clear</button>
						</div>
	
						<div id = "check-items">
	
					</div>
	
				</div>
	
				<hr style="width: 70%; margin: auto;">
	
				<div>
					<h3>Delivery fees: 1.5$</h3>
					<h3>Total: <span id="total">1.5</span>$</h3>
				</div>

				<div id="order" onclick="checkOrder()">
					ORDER
				</div>
				<div id="missing"></div>

				<div id="done">
					DONE
				</div>
			</div>
		</main>

		<footer class="footer">
			<div class="footer-container row">
					<div class="footer-col">
						<h4>Mahoub inc.</h4>
						<ul>
							<li><a href="#">about us</a></li>
							<li><a href="#">our services</a></li>
							<li><a href="#">privacy policy</a></li>
							<li><a href="#">work with us</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>get help</h4>
						<ul>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">customer service</a></li>
							<li><a href="#">order status</a></li>
							<li><a href="#">payment options</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>categories</h4>
						<ul>
							<li><a href="#">Khmer</a></li>
							<li><a href="#">Thai</a></li>
							<li><a href="#">Western</a></li>
							<li><a href="#">East Asian</a></li>
							<li><a href="#">Beverages</a></li>
						</ul>
					</div>
				</div>
				<p class="copyright">Mahoub Delivery Inc., Phnom Penh, Cambodia | 012 345 678 | mahoub.com <br/>

					© 2022 Copyright Mahoub</p>
			</div>
	   </footer>

	</body>
	<script src="menu.js" defer></script>
</html>

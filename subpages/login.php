<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login To | Mahoub Delivey</title>
		<link rel="stylesheet" href="../style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
		<script src="../nav.js" defer></script>
		<!-- <script src="../gallery.js" defer></script> -->
		<script src="../darkmode.js" defer></script>
        <script src="login.js" defer></script>
		<link rel="icon" href="../media/logo/mahoubLogo3.png" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<!-- header file"../header.php"-->
        <?php include_once 'header.php';?>

		<?php
			$notExist = "";
			$taken = "";
			if(isset($_SESSION['notExist']) && $_SESSION['notExist'] == true) {
				$notExist = "User does not exist!";
			}
			else {
				$notExist = "";
			}
			if(isset($_SESSION['taken']) && $_SESSION['taken'] == true) {
				$taken = "User already exist or taken!";
			}
			else {
				$taken = "";
			}
		?>

		<div class="outerForm">
			<h1 id="head1">LOGIN</h1>
			<h1 id="head2">SIGN IN</h1>

			<div class="btn">
				<div class="btn-login">login</div>
				<div class="btn-signin">signup</div>
			</div>

			<div class="register">
				<div class="form1">
					<form class="login" action="../include/login.inc.php" method="POST">
						<label>Email:</label><br />
						<input type="email" placeholder="email" id="email" name="email" />
						<!-- <p
							id="email-check"
							class="same"
							style="color: red; font-weight: 600"
						></p> -->
						<br />

						<label>Password:</label><br />
						<input type="password" placeholder="Password" id="password" name="password"/>
						<!-- <p
							id="pass-check"
							class="same"
							style="color: red; font-weight: 600"
						></p> -->

						<br />

						<input id="submit" name="submit" type="submit" value="login"></input>

						<?php 
							if(isset($_SESSION['notExist']) && $_SESSION['notExist'] == true) {
								echo "<p style='color:red; text-align:center;'><span>User does not exist</span><p>";
							} else {
								$_SESSION['notExist'] = false;
								echo "";
								unset($_SESSION["notExist"]);
							}
						?>
						<!-- <p class="form-message" style="color: red; font-weight: 600"></p> -->
					</form>
				</div>

				<div class="form2">
					<form class="signin" method="POST" action="../include/signup.inc.php">
						<label>UserName/NickName:</label><br />
						<input type="text" placeholder="name" id="name1" name="username"/>
						<p id="open-1" style="color: red; font-weight: 600"></p>
						<br />

						<div class="extra-name">
							<div style="margin-right: 20px">
								<label>Firstname:</label><br />
								<input type="text" placeholder="first name" id="fname" name="fname"/>
								<p id="open-1.1" style="color: red; font-weight: 600"></p>
							</div>

							<div>
								<label>Lastname:</label><br />
								<input type="text" placeholder="last name" id="lname" name="lname"/>
								<p id="open-1.2" style="color: red; font-weight: 600"></p>
							</div>
						</div>

						<label>Email:</label><br />
						<input type="email" placeholder="email" id="email1" name="email"/>
						<p id="open-2" style="color: red; font-weight: 600"></p>
						<br />

						<label>Password:</label><br />
						<input
							type="password"
							placeholder="comfirm password"
							id="password1"
							name="password"
						/>
						<p id="open-3" style="color: red; font-weight: 600"></p>
						<br />

						<label>Phone Number:</label><br />
						<input type="number" placeholder="phone number" id="num1" name="mobile"/>
						<p id="open-4" style="color: red; font-weight: 600"></p>
						<br />

						<label>Address:</label><br />
						<input type="text" placeholder="Address" id="address1" name="address"/>
						<p id="open-5" style="color: red; font-weight: 600"></p>
						<br />

						<input id="submit" name="submit" type="submit" value="signin"></input>
						<?php 
							if(isset($_SESSION['taken']) && $_SESSION['taken'] == true) {
								echo "<p style='color:red; text-align:center;'><span>User already taken</span><p>";
							} else {
								$_SESSION['taken'] = false;
								echo "";
								unset($_SESSION["taken"]);
							}
						?>
					</form>
				</div>
			</div>
		</div>

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
</html>

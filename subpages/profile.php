<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Luxury Dining at your Doorstep | Mahoub Delivey</title>
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
</head>

<body>

    <?php 
        include_once 'header.php';
    ?>

    <main>

        <div class="account"> 
            <div class="profile">
                <h1 class="profile-headers">PROFILE</h1>
                <div class="profile-img">
                    <img src="../media/images/profile.jpg">
                </div>
                <?php echo '<h3 id="info-name">'.$username.'</h3>';?>

            </div>

            <div class="section">
                <h1 class="profile-headers">User Information</h1>
                <div class="info">
                    <div class="label">
                        <label>firstname:</label>
                        <div class="input">
                            <?php echo '<p id="info1">'.$firstname.'</p>';?>
                        </div>
                    </div>

                    <div class="label">
                        <label>lastname:</label>
                        <div class="input">
                            <?php echo '<p id="info2">'.$lastname.'</p>';?>
                        </div>
                    </div>

                    <div class="label">
                        <label>email:</label>
                        <div class="input">
                            <?php echo '<p id="info2">'.$email.'</p>';?>
                        </div>
                    </div>

                    <div class="label">
                        <label>Mobile:</label>
                        <div class="input">
                            <?php echo '<p id="info4">'.$mobile.'</p>';?>
                        </div>
                    </div>

                    <div class="label">
                        <label>Address:</label>
                        <div id="edit-icon" onclick="edit(true)">Edit</div> 
                        <div id="input-address"> 
                            <?php echo '<p id="info1">'.$address.'</p>';?>
                        </div>     

                        <form id="openEdit" action="../subpages/profile.php" method="POSt">
                            <div class="editAdd">
                                <input type="text" id="address1" placeholder="House No., Street, City State" name="updateProfile">
                            </div>
                            <div id="set" name="edit" type="submit" onclick="addressChange(true)">Change</div> 
                            <!-- onclick="addressChange(true)" -->
                        </form>

                    </div>

                </div>

                <form class="pay-form">
                    <h1>Payment Method</h1>
                    
                    <div class="pay-btn">

                        <div id="visa-btn" onclick="payFunction('visa')">
                            <p>Visa</p>
                        </div>

                        <div id="pal-btn" onclick="payFunction('pal')">
                            <p>Paypal</p>
                        </div>

                    </div>

                    <div class="payment-form">
                        <div class="visa">
                            <form>
                                <input type="number" placeholder="Card Number">
                                <input type="text" placeholder="Card Holder Name">
                                <div style="display: flex; flex-wrap: nowrap;" >
                                    <input type="text" placeholder="MM / YY" value="">
                                    <input type="number" placeholder="CVV">
                                </div>
                            </form>
                        </div>

                        <div class="paypal">
                            <p>You will be redirect to Paypal page.</p>
                        </div>  
                        
                    </div> 
                    <div class="bottom-btn">
                        <div id="payment-btn">Set</div>
                    </div>

                </form>
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

    <script type="text/javascript" src="profile.js"></script>
</html>
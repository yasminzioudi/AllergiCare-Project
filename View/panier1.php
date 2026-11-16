<?php session_start();?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from wpthemesgrid.com/themes/mediplus/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 23:42:11 GMT -->

<head>
<style>
        body {
            background-color: #f0f0f0;
        }
    </style>
	 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content="pavilan">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AllergiCare</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/icon.png">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/nice-select.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/icofont.css">

    <link rel="stylesheet" href="css/slicknav.min.css">

    <link rel="stylesheet" href="css/owl-carousel.css">

    <link rel="stylesheet" href="css/datepicker.css">

    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/color/color1.css">











    <link rel="stylesheet" id="colors">
</head>

<body style="background-color: #f0f0f0;">

    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>


	


<!-- Header Area -->
<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+216 1234 5678</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:@gmail.com">Allergiecare.Support@gmail.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.php"><img src="img/gg.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
										<li><a href="index.php">Home</a></li>
										
											<?php if (!empty($_SESSION)) {?>
												<li><a href="appointment.php">Appointment</a></li>
											<?php }?>
											<li><a href="listeproduitclient.php">Products</a></li>
											<li><a href="events.php">Events</a></li>
											<li><a href="complaints.php">Reclamation</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<?php if (empty($_SESSION)) {?>

										<a href="signin.php" class="btn">Log In | Sign Up</a>

											<?php } else {?>
												<a href="profile.php" class="btn"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></a>
												<a href="logout.php">Log Out</a>
											<?php }?>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		<!-- Error Page -->
		<section class="error-page section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<!-- Error Inner -->

<?php

if (isset($_SESSION['selectedProducts']) && !empty($_SESSION['selectedProducts'])) {
    $selectedProducts = $_SESSION['selectedProducts'];
?>


    <body>

    <div class="container mt-5">
		
        <nav>
            <h2>Panier</h2>
           <button  href="panier2.php">Liste de produits</button>
        </nav>
        <div class="rows">
            <?php foreach ($selectedProducts as $key => $product): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fas fa-times close-icon" onclick="removeProduct(<?php echo $key; ?>)"></i>
                        <div class="row col-8">
                            <div class="col-md-6">
                                <h5 class="card-title" style="font-size: 1.5em;"><?php echo $product['name']; ?></h5>
                                <p class="card-text" style="font-size: 1em;"><?php echo $product['quantity']; ?></p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="card-title" style="font-size: 1.5em;">Prix unitaire: <?php echo $product['price']; ?> TND</p>
                                <h5 class="card-text" style="font-size: 1.5em;">Total: <?php echo $product['price'] * $product['quantity']; ?> </h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>     
    </div>
    <form action="..\controller\addcom.php" method="post">
                <div class="container"><div id="totalSum"  class="row" style="font-size: 2em; margin-bottom: 10px; justify-content:center"></div></div>
                <input type="text" name="inpTot" id="inpTot" style="display:none;" value="">
    <div class="container mt-3">
        <div class="text-center">
            <button class="btn btn-danger" onclick="cancelOrder()">Annuler</button>
            <button class="btn btn-success" data-toggle="modal" data-target="#orderModal" type="submit"> Commander</button>
        </div>
    </div>
    </form>

    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Passer la commande</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="orderForm">
                        <div class="form-group">
                            <label for="email">Adresse e-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success" onclick="placeOrder()">Valider</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function removeProduct(key) {
            $.ajax({
                type: 'POST',
                url: '../Controller/remove_panier.php', 
                data: { key: key },
                success: function(response) {
                    console.log(response);
                    location.reload();
                },
                error: function(error) {
                    console.error('Error removing the product:', error);
                }
            });
        }
        function cancelOrder() {
            $.ajax({
                type: 'POST',
                url: '../Controller/cancel_order.php',
                success: function(response) {
                    console.log(response);
                    location.reload();
                },
                error: function(error) {
                    console.error('Error cancelling the order:', error);
                }
            });
        }

        function placeOrder() {
            var email = $('#email').val();

            $.ajax({
                type: 'POST',
                url: '../Controller/place_order.php', 
                data: { email: email },
                success: function(response) {
                    console.log(response);
                    $('#orderModal').modal('hide');
                    alert('Order placed successfully!');
                },
                error: function(error) {
                    console.error('Error placing the order:', error);
                }
            });
        }
        function updateTotalSum() {
            var totalSum = 0;

            <?php foreach ($selectedProducts as $product): ?>
                totalSum += <?php echo $product['price'] * $product['quantity']; ?>;
            <?php endforeach; ?>

            document.getElementById('totalSum').innerHTML = 'Total à payer: ' + totalSum.toFixed(2) + ' TND';
            document.getElementById('inpTot').value = totalSum.toFixed(2);
        }

        window.onload = updateTotalSum;

    </script>

</body>
</html>

<?php
} else {
    echo '<div class="center"><img src="../Assets/panier.jpg" alt="Empty Cart" style="width:40%; "></div><div class="center"><button class="liste"><a href="panier2.php"><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff;margin-right:10px;}</style><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg> Liste des produits</span></a></button></div>';
}
?>

						<!--/ End Error Inner -->
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Error Page -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>

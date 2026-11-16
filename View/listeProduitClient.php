    <?php
    require_once '../Controller/ProduitC.php';
    session_start();

    $produitC = new ProduitC();
    $categories = $produitC->listCategorie();

    $id_c = isset($_GET['id_c']) ? $_GET['id_c'] : null;
    $minPrice = isset($_GET['minPrice']) ? $_GET['minPrice'] : null;
    $maxPrice = isset($_GET['maxPrice']) ? $_GET['maxPrice'] : null;
    $sortOrder = isset($_GET['sortOrder']) ? $_GET['sortOrder'] : 'asc';
    $disponibility = isset($_GET['disponibility']) ? $_GET['disponibility'] : null;





    if ($id_c === 'all') {
        $products = $produitC->listProduit(null, $minPrice, $maxPrice, $sortOrder, $disponibility);
    } else {
        $products = $produitC->listProduit($id_c, $minPrice, $maxPrice, $sortOrder, $disponibility);
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AllergiCare</title>
    

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        
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

    <body>
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


    <ul class="pro-features">
			<a class="get-pro" href="panier1.php">Basket</a>
	
			<div class="button">
				<a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879" target="_blank" class="btn">Pro Version Demo</a>
				<a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank" class="btn">Buy Pro Version</a>
			</div>
		</ul>
	


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
        <div style="background-color: #282c36; padding: 30px; text-align: center;">
            <h1 style="color: #61dafb;"><i class="fas fa-box-open"></i> List des Produits <i class="fas fa-box-open"></i></h1>

            <form method="GET" action="listeProduitClient.php" style="margin-bottom: 20px; display: flex; justify-content: space-around; align-items: center;">
                <label for="id_c" style="color: #fff;">Category:</label>
                <select id="id_c" name="id_c" autocomplete="off">
                    <option value="all">All Products</option>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id_c']; ?>" <?= $id_c === $category['id_c'] ? 'selected' : ''; ?>>
                            <?= $category['c_nom']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <label for="minPrice" style="color: #fff;">Min Price:</label>
                <input type="text" id="minPrice" name="minPrice" min="0" value="<?= $minPrice ?>">

                <label for="maxPrice" style="color: #fff;">Max Price:</label>
                <input type="text" id="maxPrice" name="maxPrice"  value="<?= $maxPrice ?>">

                <label for="sortOrder" style="color: #fff;">Sort Order:</label>
                <select id="sortOrder" name="sortOrder">
                    <option value="asc" <?= $sortOrder === 'asc' ? 'selected' : '' ?>>Lowest to Highest</option>
                    <option value="desc" <?= $sortOrder === 'desc' ? 'selected' : '' ?>>Highest to Lowest</option>
                </select>
                <label for="disponibility" style="color: #fff;">Availability:</label>
    <select id="disponibility" name="disponibility">
        <option value="">All</option>
        <option value="En Stock" <?= $disponibility === 'En Stock' ? 'selected' : '' ?>>En Stock</option>
        <option value="Hors Stock" <?= $disponibility === 'Hors Stock' ? 'selected' : '' ?>>Hors Stock</option>
    </select>

                <button type="submit" style=" border: none; padding: 10px; cursor: pointer;">
                    <i class="fas fa-search"></i> Filter
                </button>
            </form>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: space-around;">
            <?php foreach ($products as $product) : ?>
                <div style="background-color: #fff; border: 1px solid #ccc; padding: 20px; margin: 10px; width: 200px; text-align: center;">
                    <img src="../uploadImage/<?= $product['Image']; ?>" alt="<?= $product['Name']; ?>" style="max-width: 100%; height: auto; border: 1px solid #ddd; border-radius: 8px;">
                    <p style="margin: 10px 0; color: #333; font-weight: bold;"><?= $product['Name']; ?></p>
                    <p style="color: orange; font-weight: bold;"><?= $product['Price']; ?> TND</p>
                    <p style="color: <?= $product['disponibility'] === 'En Stock' ? 'green' : 'red'; ?>; font-weight: bold;">
                    <?= $product['disponibility']; ?>
                </p>
                <form method="post" action="panier1.php">
                    <button type="submit" style="background-color: #282c36; color: #fff; border: none; padding: 10px; cursor: pointer;">
                        <i class="fas fa-cart-plus"></i> Acheter
                    </button>
            </form>
                </div>
            <?php endforeach; ?>
        </div>
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

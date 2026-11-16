<?php session_start();?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from wpthemesgrid.com/themes/mediplus/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 23:42:11 GMT -->

<head>
<meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Product List</title>
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
                <style>
                        .nav-btn{
                            float: inline-end;
                            bottom: 45px;
                            position: relative;
                            justify-content: center;
                            display: flex;
                            column-gap: 20px;
                        }
                        .supprime {
                            width: 150px;
                            height: 40px;
                            cursor: pointer;
                            display: flex;
                            align-items: center;
                            background: red;
                            border: none;
                            border-radius: 5px;
                            box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
                            background: #e62222;
                        }

                        .supprime, .supprime span {
                            transition: 200ms;
                        }

                        .supprime .text {
                            transform: translateX(10px);
                            color: white;
                            font-weight: bold;
                        }

                        .supprime .icon {
                            position: absolute;
                            border-left: 1px solid #c41b1b;
                            transform: translateX(100px);
                            height: 40px;
                            width: 40px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .supprime svg {
                            width: 15px;
                            fill: #eee;
                        }

                        .supprime:hover {
                            background: #ff3636;
                        }

                        .supprime:hover .text {
                            color: transparent;
                        }

                        .supprime:hover .icon {
                            width: 150px;
                            border-left: none;
                            transform: translateX(0);
                        }

                        .supprime:focus {
                            outline: none;
                        }

                        .supprime:active .icon svg {
                            transform: scale(0.8);
                        }
                        .quantity-input.mw-40{
                            max-width:40px;
                        }
                        .panier{
                            width: 200px;
                            height: 40px;
                            cursor: pointer;
                            display: flex;
                            align-items: center;
                            border: none;
                            border-radius: 5px;
                            box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
                            background: #007bff;
                        }

                        .panier, .panier span {
                            transition: 200ms;
                        }

                        .panier .text {
                            transform: translateX(8px);
                            color: white;
                            font-weight: bold;
                        }

                        .panier .icon {
                            position: absolute;
                            border-left: 1px solid #ffffff;
                            transform: translateX(145px);
                            height: 40px;
                            width: 40px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .panier svg {
                            width: 18px;
                            fill: #eee;
                        }

                        .panier:hover {
                            background: #007bff;
                        }

                        .panier:hover .text {
                            color: transparent;
                        }

                        .panier:hover .icon {
                            width: 150px;
                            border-left: none;
                            transform: translateX(15px);
                        }

                        .panier:focus {
                            outline: none;
                        }

                        .panier:active .icon svg {
                            transform: scale(0.8);
                        }
                        table tbody tr{
                            text-align:center;
                        }
                       /* .ajout {
                            border: 2px solid #ffc107;
                            background-color: #ffc107;
                            border-radius: 0.5em;
                            padding: 0.4em 1.2em 0.4em 1em;
                            transition: all ease-in-out 0.2s;
                            font-size: 16px;
                        }*/
                        .voir{
                            padding: 0.4em 1.2em 0.4em 1em;
                            transition: all ease-in-out 0.2s;
                            font-size: 16px; 
                        }
                       /* .ajout span {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: #fff;
                            font-weight: 600;
                        }

                        .ajout:hover {
                            background-color: #ffc107bf;
                        }
                        .ajout a:hover{
                            text-decoration:none;
                        }*/
                        .center-cell{
                            display:inline-block;
                            margin:auto;
                            float: left;
                        }
                </style>
<style>
        body {
            background-color: #f0f0f0;
        }
    </style>
	 <style>
            .close-icon {
                cursor: pointer;
                color: red;
                font-size: 1.2em;
                float: inline-end;
            }
            
            .titre{
                float: inline-end;
                bottom: 45px;
                position: relative;
            }
            .container .rows{
                margin-top:5%;
            }
            .center{
                text-align:center;
            }
            .liste {
                border: 2px solid #0069d9;
                background-color: #007bff;
                border-radius: 0.5em;
                padding: 0.4em 1.2em 0.4em 1em;
                transition: all ease-in-out 0.2s;
                font-size: 16px;
            }

            .liste span {
                display: flex;
                justify-content: center;
                align-items: center;
                color: #fff;
                font-weight: 600;
            }

            .liste:hover {
                background-color: #0069d9;
            }
            .liste a:hover{
                text-decoration:none;
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
require_once '../config.php';

try {
    $pdo = config::getConnexion();

    $query = $pdo->query('SELECT * FROM product');

    if ($query) {
        
     
$result = $query->fetchAll();

        if (is_array($result) && count($result) > 0) {
            ?>
           
               

            

                <div class="container mt-5">
                    <h2>Liste des produits</h2>
                    <br>
                    <br>
                    <br>
                    <div class="nav-btn">
                   
                 
                    
                    </a>
                    </button>
                   
                    <a href="panier3.php" class="btn btn-primary voir"><i class="fa-solid fa-shopping-cart"></i> Voir le panier<span id="cartItemCount"></span></a>
                    <br>    
                </div>

                    <table class="table table-bordered">

                        <tbody>
                            <?php foreach ($result as $product) { ?>
                                <tr>
                                    <td>#<?php echo $product['id']; ?></td>
                                    <td><?php echo $product['name']; ?></td>
                                    <td><?php echo $product['price']; ?> TND</td>
                                    <td>
                                        <input type="number" min="1" value="1" class="quantity-input mw-40" name="quantity" id="quantity-input-<?php echo $product['id']; ?>">
                                    </td>
                                    <td  class="center-cell">
                                    <button class="noselect panier" onclick="selectProduct(<?php echo $product['id']; ?>)"><span class="text">Ajouter au panier</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg></span></button>
                                    </td>
                                   
                                   
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>




         

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script>
                function deleteProduct(productId) {
                    var modal = document.createElement('div');
                    modal.className = 'modal';

                    modal.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation de suppression</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Êtes-vous sûr de vouloir supprimer ce produit ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete(${productId})">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    `;


                    $(modal).modal('show');
                }
                function confirmDelete(productId) {
                    $.ajax({
                        type: 'POST',
                        url: '../Controller/delete.php', 
                        data: { productId: productId },
                        success: function(response) {
                            console.log(response);

                            $('.modal').modal('hide');

                            alert('Produit supprimé avec succès!');
                            location.reload();
                        },
                        error: function(error) {
                            console.error('Erreur lors de la suppression du produit :', error);
                        }
                    });
                }
                function selectProduct(productId) {
                    var quantity = $('#quantity-input-' + productId).val();

                    $.ajax({
                        type: 'POST',
                        url: '../Controller/select.php',
                        data: { productId: productId, quantity: quantity }, 
                        success: function(response) {
                            console.log(response);
                            alert('Produit ajouté au panier avec succès!');
                            updateCartCount();

                        },
                        error: function(error) {
                            console.error('Erreur lors de la sélection du produit :', error);
                        }
                    });
                }
                function updateCartCount() {
                    $.ajax({
                        type: 'GET',
                        url: '../Controller/cartCount.php',
                        success: function(response) {
                            $('#cartItemCount').text(' (' + response + ')');
                        },
                        error: function(error) {
                            console.error('Erreur lors de la récupération du nombre d\'articles dans le panier :', error);
                        }
                    });
                }


               </script>

            
        
          


        
<?php
        } else {
            
        
echo "No products found.";
        }
    } else {
        echo "Error in the database query.";
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
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
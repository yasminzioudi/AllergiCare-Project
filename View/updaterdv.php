<?php
include_once '../Model/rendezvous.php';
include_once '../Controller/rendezvousC.php';
session_start();
$error = "";
$rendezvous = NULL;
$rendezvousC = new rendezvousC();
$listRDV=$rendezvousC->afficherRDV();
if (
 
  isset($_POST["date"]) &&
  isset($_POST["temp"]) &&
  isset($_POST["dep"]) &&
  isset($_POST["doctor"]) &&
  isset($_POST["text"]) 
) {
  if (
   
    !empty($_POST["date"]) &&
    !empty($_POST["temp"]) &&
    !empty($_POST["dep"]) &&
    !empty($_POST["doctor"]) &&
    !empty($_POST["text"]) 
  ) {$date1 = new DateTime($_POST["date"]);
    $date2 = new DateTime();
    if($date1<$date2)
    {
        $error="Invalid Date !";
    }else{
    $rendezvous = new rendezvous(
        $_GET['id'],
        $_SESSION['id'],
        $_SESSION['fname'],
        $_SESSION['lname'],
        $_SESSION['email'],
        $_SESSION['phone'],
      $_POST['dep'],
      $_POST['doctor'],
      $_POST['date'],
      $_POST['temp'],
      $_POST['text'],
      "Non Confirme"
    );
    $rendezvousC->modifierRDV($rendezvous);
  header('Location:appointment.php');}
  } else
    $error = "Missing information";
}
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from wpthemesgrid.com/themes/mediplus/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 23:42:11 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content="pavilan">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mediplus - Medical and Doctor HTML Template.</title>

    <link rel="icon" href="img/favicon.png">

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


    <div class="color-plate">
        <a class="color-plate-icon"><i class="fa fa-cog fa-spin"></i></a>
        <h4>Mediplus</h4>
        <p>Here is some awesome color's available on Mediplus Template.</p>
        <span class="color1"></span>
        <span class="color2"></span>
        <span class="color3"></span>
        <span class="color4"></span>
        <span class="color5"></span>
        <span class="color6"></span>
        <span class="color7"></span>
        <span class="color8"></span>
        <span class="color9"></span>
        <span class="color10"></span>
        <span class="color11"></span>
        <span class="color12"></span>
    </div>


    <header class="header">

        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">

                        <ul class="top-link">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-6 col-md-7 col-12">

                        <ul class="top-contact">
                            <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                            <li><i class="fa fa-envelope"></i><a
                                    href="https://wpthemesgrid.com/cdn-cgi/l/email-protection#a4d7d1d4d4cbd6d0e4ddcbd1d6c9c5cdc88ac7cbc9"><span
                                        class="__cf_email__"
                                        data-cfemail="81f2f4f1f1eef3f5c1f8eef4f3ece0e8edafe2eeec">[email&#160;protected]</span></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">

                            <div class="logo">
                                <a href="index-2.html"><img src="img/logo.png" alt="#"></a>
                            </div>


                            <div class="mobile-nav"></div>

                        </div>
                        <div class="col-lg-7 col-md-9 col-12">

                      <div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="#">Acceuil <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="index.php">Acceuil Page 1</a></li>
												</ul>
											</li>
											<?php if (empty($_SESSION)) {?>
												<li><a href="appointment.php">Rendez Vous</a></li>
											<?php }?>
											<li><a href="#">Doctos </a></li>
											<li><a href="#">Services </a></li>
											<li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="404.html">404 Error</a></li>
												</ul>
											</li>
											
											<li><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="blog-single.html">Blog Details</a></li>
												</ul>
											</li>
											<li><a href="contact.html">Contact Nous</a></li>
										</ul>
									</nav>
								</div>

                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="appointment.html" class="btn"> Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Get Your Appointment</h2>
                        <ul class="bread-list">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="appointment single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="appointment-inner">
                        <div class="title">
                            <h3>Edit your appointment</h3>
                        </div>
                        <?php
              if (isset($_GET['id'])) {
                $rdv = $rendezvousC->recupererRDV($_GET['id']);
              ?>
                        <form class="form" method="POST">
                            <div class="row">
                              
                                <div class="col-lg-6 col-md-6 col-12">
    <div class="form-group">
        <select name="dep" class="form-control wide">
            <option value="1">Department</option>
            <option value="2">Cardiac Clinic</option>
            <option value="3">Neurology</option>
            <option value="4">Dentistry</option>
            <option value="5">Gastroenterology</option>
        </select>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-12">
    <div class="form-group">
    <select name="doctor" class="form-control wide">
                        <?php
                        $liste = $rendezvousC->listDoc();
                        foreach ($liste as $doc) {
                            echo "<option value='" . $doc['id'] . "'>" . $doc['nom'] .  "</option>";
                        }
                        ?>
    </div>
</div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="date" type="text" placeholder="Date" id="datepicker" value=<?php echo $rdv["date"]; ?>>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="temp" type="time" placeholder="time" id="datepicker" value=<?php echo $rdv["time"]; ?> >
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <textarea name="text" name="message" placeholder="Write Your Message Here....."><?php echo $rdv["message"]; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="button">
                                            <button type="submit" class="btn">Book An Appointment</button>
                                            <?php if($error != ""){?>
                                                <p style="color: red;"><?php echo $error; ?></p>
                                            <?php }?>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
              }
              ?>
                    </div>
                </div>
              
            </div>
        </div>
    </section>


    <footer id="footer" class="footer ">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut
                                labore dolore magna.</p>

                            <ul class="social">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our
                                                Cases</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other
                                                Links</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Consuling</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Testimonials</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact
                                                Us</a></li>
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
                            <p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit,</p>
                            <form action="https://wpthemesgrid.com/themes/mediplus/mail/mail.php" method="get"
                                class="newsletter-inner">
                                <input name="email" placeholder="Email Address" class="common-input"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                    required type="email">
                                <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p>Designed and Developed by<a href="https://wpthemesgrid.com/" rel="nofollow"
                                    target="_blank">WpthemesGrid</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <div class="wp-version">
        <a href="https://wpthemesgrid.com/downloads/mediplus-medical-and-doctor-wordpress-theme/" target="_blank"
            rel="nofollow">
            <div class="image"><img src="img/wp-icon.png"></div>Looking for WP version?
        </a>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <script src="js/jquery-migrate-3.0.0.js"></script>

    <script src="js/easing.js"></script>

    <script src="js/colors.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>

    <script src="js/jquery.nav.js"></script>

    <script src="js/slicknav.min.js"></script>

    <script src="js/jquery.scrollUp.min.js"></script>

    <script src="js/niceselect.js"></script>

    <script src="js/tilt.jquery.min.js"></script>

    <script src="js/owl-carousel.js"></script>

    <script src="js/jquery.counterup.min.js"></script>

    <script src="js/steller.js"></script>

    <script src="js/wow.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>

    <script src="js/gmaps.min.js"></script>

    <script src="js/map-active.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"82ef2e980dfd11ac","version":"2023.10.0","r":1,"token":"3248e93e0d6447329c4d6bcc351d5700","b":1}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from wpthemesgrid.com/themes/mediplus/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 23:42:12 GMT -->

</html>


<?php

require_once __DIR__ . '/../../Model/Event.php';
include __DIR__ . '/../../Controller/EventC.php';

if(isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['date']) && isset($_POST['lieu'])){
    $filename = $_FILES["affiche"]["name"];
    $tempname = $_FILES["affiche"]["tmp_name"];

    $folder = "assets/images/".$filename ;
    move_uploaded_file($tempname, $folder);

    $event =new Event($_POST['nom'], $_POST['description'], $_POST['lieu'], $_POST['date'],$folder);
    $eventC =new EventC();
    $eventC->ajouterEvent($event);
    ?>
    <script>
        window.location.replace("listevent.php");
    </script>
    <?php
}

?>


<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 13:38:14 GMT -->
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>AllergiCare</title>
<link rel="icon" href="img/hh.png" type="image/png">

<link rel="stylesheet" href="css/bootstrap1.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />

<link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="vendors/morris/morris.css">

<link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style1.css" />
<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">



<nav class="sidebar">
<div class="logo d-flex justify-content-between">
<a href="index.html"><img src="img/hh.png" alt></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="side_menu_title">
<span>Admins Side</span>
</li>
<li class="mm-active">
<a class="has-arrow" href="#" aria-expanded="false">

<img src="img/menu-icon/1.svg" alt>
<span>Users</span>
</a>
<ul>
<li><a class="active" href="statusers.php">User Stats</a></li>
<li><a href="listusers.php">User list</a></li>
</ul>
</li>

<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="img/menu-icon/2.svg" alt>
<span>Events</span>
</a>
<ul>
<li><a href="listevent.php">Events List</a></li>
<li><a href="participants.php">Participant List</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="img/menu-icon/3.svg" alt>
<span>Reclamation</span>
</a>
<ul>
<li><a href="listcomplaints.php">Complaints</a></li>
<li><a href="listerepo.php">Answers</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="img/menu-icon/4.svg" alt>
<span>Products</span>
</a>
<ul>
<li><a href="listProduit.php">Product List</a></li>
<li><a href="listCategorie.php">Category List</a></li>
<li><a href="stat.php">Statistics</a></li>
<li><a href="addCategorie.php">Add Category</a></li>
<li><a href="addProduit.php">Add Product</a></li>
</li>


<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<img src="img/menu-icon/5.svg" alt>
<span>Basket Of Products</span>
</a>
<li><a href="afficherCom.php">Commands</a>

<ul>



</nav>


<section class="main_content dashboard_part">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<div class="serach_field-area">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search here...">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
</form>
</div>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a href="#"> <img src="img/icon/bell.svg" alt> </a>
</li>
<li>
<a href="#"> <img src="img/icon/msg.svg" alt> </a>
</li>
</div>
<div class="profile_info">
<img src="img/client_img.png" alt="#">
<div class="profile_info_iner">
<p>Neurologist </p>
<h5>Dr. Robar Smith</h5>
<div class="profile_info_details">
<a href="#">My Profile <i class="ti-user"></i></a>
<a href="#">Settings <i class="ti-settings"></i></a>
<a href="#">Log Out <i class="ti-shift-left"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>Table</h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input type="text" placeholder="Search content here...">
</div>
<button type="submit"> <i class="ti-search"></i> </button>
</form>
</div>
</div>
<div class="add_button ms-2">
<a href="#" data-bs-toggle="modal" data-bs-target="#addcategory" class="btn_1">Add New</a>
</div>
</div>
</div>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accounts Page - Dashboard Template</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>
       
            <div class="col-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title">Ajouter un evenement</h2>
                        </div>
                    </div>
                    <div class="row">
                    <form action="" method="POST" onsubmit="return validateForm()">
        <table>
            <tr>
                <td><label for="nom">Nom :</label></td>
                <td>
                    <input type="text" id="nom" name="nom" onblur="validateNom()" />
                    <span id="erreurNom" style="color: red"></span>
                </td>
            </tr>
            <tr>
    <td><label for="description">Description :</label></td>
    <td>
        <textarea id="description" name="description" onblur="validateDescription()"></textarea>
        <span id="erreurDescription" style="color: red"></span>
    </td>
    <tr>
    <td><label for="lieu">lieu :</label></td>
    <td>
    <select id="lieu" name="lieu" onchange="validateLieu()">
    <option value="" selected disabled>Choisissez un pays</option>
            <option value="Argentine">Argentine</option>
            <option value="Brazil">Brazil</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Chile">Chile</option>
            <option value="Tunisie">Tunisie</option>
            <option value="Algerie">Algerie</option>
            <option value="Libye">Libye</option>
            <option value="Spain">Spain</option>
            <option value="Egypt">Egypt</option>
            <option value="Palestine">Palestine</option>
            <option value="USA">USA</option>
            <option value="Canada">Canada</option>
            <option value="Mexique">Mexique</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="England">England</option>
            <option value="Scotland">Scotland</option>
            <option value="Wales">Wales</option>
            <option value="Portugal">Portugal</option>
            <option value="Belgique">Belgique</option>
            <option value="Denmark">Denmark</option>
            <option value="Suéde">Suéde</option>
            <option value="Norvége">Norvége</option>
            <option value="Russie">Russie</option>
            <option value="Japan">Japan</option>
            <option value="New Zeeland">New Zeeland</option>
            <option value="Australie">Australie</option>
            <option value="Autriche">Autriche</option>
            <option value="Philippines">Philippines</option>
            <option value="Inde">Inde</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Saudie Arabie">Saudie Arabie</option>
            <option value="Yaman">Yaman</option>
            <option value="Qatar">Qatar</option>
            <option value="United Emarites">United Emarites</option>
            <option value="Irak">Irak</option>
            <option value="Iran">Iran</option>
            <option value="Turkie">Turkie</option>
        </select>
        <span id="erreurLieu" style="color: red"></span>
    </td>
    </tr>
    </tr>
                <tr>
                <td><label for="date">date :</label></td>
                <td>
                    <input type="date" id="date" name="date" onblur="validateDate()" />
                    <span id="erreurDate" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="affiche">Affiche :</label></td>
                <td>
                    <input type="file" id="affiche"/>
                </td>
            </tr>
            

            
            <td>
                <input type="submit" value="Save">
            </td>
            <td>
                <input type="reset" value="Reset">
            </td>
        </table>
    </form>
                        <br/>
                        <a href="listevent.php">Voir les evenements</a>

                    </div>
                </div>
            </div>
        
        </div>
        <footer class="row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018 Admin Dashboard . Created by
                    <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</body>

</html>
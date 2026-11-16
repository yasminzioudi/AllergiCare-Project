<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['id_c']) && isset($_POST['disponibility']) && isset($_FILES['image'])) {
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $id_c = $_POST['id_c'];
    $disponibility = $_POST['disponibility'];
    $targetDirectory = "../../uploadImage/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $Image = $_FILES["image"]["name"];
        include __DIR__ . '/../../Controller/ProduitC.php';
                $ProduitC = new ProduitC();
        $ProduitC->addProduit($Name, $Price, $Image, $id_c, $disponibility);
        header("Location: listProduit.php");
        exit();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
include __DIR__ . '/../../Controller/ProduitC.php';
$produitC = new ProduitC();
$categories = $produitC->listCategorie();
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <script src="validationProduit.js"></script>
    <link rel="stylesheet" href="stylesProduit.css">
    
</head>

<body>
    <hr>
    <form action="addProduit.php" id="addForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        <table>
            <tr>
                <td><label for="name">Name :</label></td>
                <td><input type="text" id="name" name="name" autocomplete="off" /><span id="errorName" style="color: red"></span></td>
            </tr>
            <tr>
                <td><label for="price">Price :</label></td>
                <td><input type="text" id="price" name="price" autocomplete="off" /><span id="errorPrice" style="color: red"></span></td>
            </tr>
            <tr>
                <td><label for="id_c">Category:</label></td>
                <td>
                    <select id="id_c" name="id_c" autocomplete="off">
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category['id_c']; ?>"><?php echo $category['c_nom']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <span id="errorIdC" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="disponibility">Disponibility:</label></td>
                <td>
                    <select id="disponibility" name="disponibility" autocomplete="off">
                        <option value="En Stock">En Stock</option>
                        <option value="Hors Stock">Hors Stock</option>
                    </select>
                    <span id="errorDisponibility" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="image">Image :</label></td>
                <td><input type="file" id="image" name="image" autocomplete="off" /><span id="errorImage" style="color: red"></span></td>
            </tr>

            <tr>
                <td><input type="submit" value="Save"></td>
                <td><input type="reset" value="Reset" style="background-color: #e74c3c; color: #fff;"></td>
            </tr>
        </table>
    </form>
    <script>
        document.getElementById("addForm").onsubmit = function (event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        };
    </script>
</body>

</html>

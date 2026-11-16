<?php
include __DIR__ . '/../../Controller/chartC.php';
$data = chartC::getProductsPerCategory();
$totalProducts = array_sum(array_column($data, 'product_count'));
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 13:38:14 GMT -->
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
<li><a href="Participant.php">Participant List</a></li>
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
<button type="submit"> <img src="../img/icon/icon_search.svg" alt> </button>
</form>
</div>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a href="#"> <img src="../img/icon/bell.svg" alt> </a>
</li>
<li>
<a href="#"> <img src="../img/icon/msg.svg" alt> </a>
</li>
</div>
<div class="profile_info">
<img src="../img/client_img.png" alt="#">
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

<div class="main_content_iner">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="single_element">
<div class="quick_activity">
<div class="row">
<div class="col-12">
<div class="quick_activity_wrap">
<div class="single_quick_activity d-flex">
<div class="icon">
<img src="/webproject-main/View/Back/img/icon/man.svg" alt>
</div>
<div class="count_content">
<h3><span class="counter"><?php echo chartC::getTotalCategories(); ?> </h3>
<p>Categories</p>
</div>
</div>
<div class="single_quick_activity d-flex">
<div class="icon">
<img src="/webproject-main/View/Back/img/icon/cap.svg" alt>
</div>
<div class="count_content">
<h3><span class="counter"><?php echo chartC::getTotalProducts(); ?> </span> </h3>
<p>Products</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<h1><i>Category-wise Product Chart</i></h1>
    <canvas id="categoryChart" width="400" height="200"></canvas>

    <script>
        var categoryData = <?php echo json_encode($data); ?>;
        var totalProducts = <?php echo $totalProducts; ?>;

        var categoryChartCanvas = document.getElementById('categoryChart').getContext('2d');
        var categoryChart = new Chart(categoryChartCanvas, {
            type: 'bar',
            data: {
                labels: categoryData.map(item => item.category_name),
                datasets: [{
                    label: 'Number of Products',
                    data: categoryData.map(item => item.product_count),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        max: totalProducts,
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
<div class="main-title">



</div>
</li>
</ul>
</div>
</div>
</div>

<div class="box_header border_bottom_1px  ">
<div class="main-title">


<div class="footer_part">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="footer_iner text-center">
<p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a></p>
</div>
</div>
</div>
</div>
</div>
</section>



<script src="../js/jquery1-3.4.1.min.js"></script>

<script src="../js/popper1.min.js"></script>

<script src="../js/bootstrap1.min.js"></script>

<script src="../js/metisMenu.js"></script>

<script src="../vendors/count_up/jquery.waypoints.min.js"></script>

<script src="../vendors/chartlist/Chart.min.js"></script>

<script src="../vendors/count_up/jquery.counterup.min.js"></script>

<script src="../vendors/swiper_slider/js/swiper.min.js"></script>

<script src="../vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="../vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="../vendors/gijgo/gijgo.min.js"></script>

<script src="../vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatable/js/buttons.flash.min.js"></script>
<script src="../vendors/datatable/js/jszip.min.js"></script>
<script src="../vendors/datatable/js/pdfmake.min.js"></script>
<script src="../vendors/datatable/js/vfs_fonts.js"></script>
<script src="../vendors/datatable/js/buttons.html5.min.js"></script>
<script src="../vendors/datatable/js/buttons.print.min.js"></script>
<script src="../js/chart.min.js"></script>

<script src="../vendors/progressbar/jquery.barfiller.js"></script>

<script src="../vendors/tagsinput/tagsinput.js"></script>

<script src="../vendors/text_editor/summernote-bs4.js"></script>
<script src="../vendors/apex_chart/apexcharts.js"></script>

<script src="../js/custom.js"></script>
<script src="../vendors/apex_chart/bar_active_1.js"></script>
<script src="../vendors/apex_chart/apex_chart_list.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 13:38:43 GMT -->
</html>
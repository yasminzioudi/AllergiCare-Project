<?php
include __DIR__ . '/../../Controller/ParticipantsC.php';
$participant = new ParticipantsC();
$listeParticipants = $participant->trierparticipants();
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

<body>
<button><a href="participants.php">Back to list</a></button>
    <!-- EXCEL -->
    <button class="btn btn-info" id="btnExport" onclick="exportReportToExcel()"><i class="far fa-file-excel"></i> Export To Excel</button>
    <!-- SORT -->
    <button class="btn btn-success" id="btnSort" onclick="sortTableByNom()">Sort By Name</button>

    <script>
        function refresh() {
            window.location.reload();
        }

        function exportReportToExcel() {
            let table = document.getElementById("example1");
            let html = table.outerHTML;
            let blob = new Blob(['\ufeff', html], {
                type: 'application/vnd.ms-excel'
            });
            let url = 'data:application/vnd.ms-excel;charset=utf-8,' + encodeURIComponent(html);
            let downloadLink = document.createElement("a");
            document.body.appendChild(downloadLink);
            downloadLink.href = url;
            downloadLink.download = 'gestion_participants.xls';
            downloadLink.click();
            document.body.removeChild(downloadLink);
        }

        function confirmSupp() {
            return confirm("Supprimer le participant avec succès !");
        }

        function sortTableByNom() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("example1");
            switching = true;

            /* Make a loop that will continue until no switching has been done: */
            while (switching) {
                // Start by saying: no switching is done:
                switching = false;
                rows = table.rows;

                /* Loop through all table rows (except the first, which contains table headers): */
                for (i = 1; i < rows.length - 1; i++) {
                    // Start by saying there should be no switching:
                    shouldSwitch = false;

                    /* Get the two elements you want to compare, one from current row and one from the next: */
                    x = rows[i].getElementsByTagName("TD")[1];
                    y = rows[i + 1].getElementsByTagName("TD")[1];

                    /* Check if the two rows should switch place, based on the direction, asc or desc: */
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /* If a switch has been marked, make the switch and mark that a switch has been done: */
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }
    </script>

    <!-- Start -->
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listeParticipants as $row) {
            ?>
                <tr>
                    <td><?php echo $row['nom']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?PHP
            }
            ?>
        </tbody>
    </table>
    <div>
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>

</body>

</html>

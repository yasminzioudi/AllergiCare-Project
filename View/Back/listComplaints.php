<?php
include __DIR__ . '/../../Controller/complaintsController.php';

require_once __DIR__ . '/../../Config.php';

// ... Your existing PHP code ...

$id = 'your_id';
$rating = 'your_rating';
$comments = 'your_comments';

$complaintController = new ComplaintsController($id, $rating, $comments);

$error = "";

$crudController = new crudComplaint();
$perPage = 10; // Adjust this value based on your pagination needs
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($currentPage - 1) * $perPage;
$listOfComplaints = $crudController->listComplaints($offset, $perPage);


if (isset($_POST["rating"]) && isset($_POST["comments"])) {
    if (!empty($_POST["rating"]) && !empty($_POST["comments"])) {
        $complaint = new ComplaintsController(null, $_POST['rating'], $_POST['comments'], null);
        $crudController->addComplaint($complaint);
        header('Location:listComplaints.php');
        exit;
    } else {
        $error = "Missing information";
    }
}

$listOfComplaints = $crudController->listComplaints();
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
</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
<?php
        if (!empty($listOfComplaints)) {
        ?>
            <table>
                <thead>
                    <tr>
                        <th>References</th>
                        <th>Rating</th>
                        <th>Comments</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Response</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listOfComplaints as $complaint) {
                    ?>
                        <tr class="complaint-row">
                            <td><?= htmlspecialchars($complaint['id']); ?></td>
                            <td><?= htmlspecialchars($complaint['rating']); ?></td>
                            <td><?= htmlspecialchars($complaint['comments']); ?></td>
                            <td align="center">
                                <form method="POST" action="updateComplaints.php">
                                <button type="submit" name="update" class="btn1">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
   

    <input type="hidden" value="<?= $complaint['id']; ?>" name="idComplaint">
</button>

                                </form>
                            </td>
                            <td>
                                
                            <button class="btn"><a href="../Controller/deletecomplaint.php?id=<?= $complaint['id']; ?>"></a>
  <svg viewBox="0 0 15 17.5" height="17.5" width="15" xmlns="http://www.w3.org/2000/svg" class="icon">
  <path transform="translate(-2.5 -1.25)" d="M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z" id="Fill"></path>
</svg>
</button>
                                
                            </td>
                            <td>
                            <button class="button3"><a href="reponse.php?id=<?= $complaint['id']; ?>" onclick="displayFeedbackId()"><span>Reply</span></a>
    
    <svg class="svg3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
        <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
        <path fill="black" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
    </svg>
</button>
                                
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "No complaints found.";
        }
        ?>

<!-- //user feedback  -->




























</section>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            var searchInput = document.getElementById('search');
            var filterSelect = document.getElementById('filter');

            searchInput.addEventListener('input', function () {
                filterComplaints();
            });

            filterSelect.addEventListener('change', function () {
                filterComplaints();
            });

            function filterComplaints() {
                var searchValue = searchInput.value.toLowerCase();
                var filterValue = filterSelect.value.toLowerCase();

                var complaints = document.querySelectorAll('table tbody tr.complaint-row');

                complaints.forEach(function (complaint) {
                    var id = complaint.querySelector('td:nth-child(1)').innerText.toLowerCase();
                    var rating = complaint.querySelector('td:nth-child(2)').innerText.toLowerCase();

                    var matchesSearch = id.includes(searchValue);
                    var matchesFilter = filterValue === '' || rating.includes(filterValue);

                    if (matchesSearch && matchesFilter) {
                        complaint.style.display = '';
                    } else {
                        complaint.style.display = 'none';
                    }
                });
            }
        });

</script>
<script>
// pagination js
var array_length = 60; // Total number of complaints
var table_size = 10;
var current_index = 1;
var max_index = Math.ceil(array_length / table_size);

function displayIndexButtons() {
    $(".index_buttons button").remove()
    $(".index_buttons").append('<button onclick="changePage(\'prev\')">Previous</button>');

    for (var i = 1; i <= max_index; i++) {
        $(".index_buttons").append('<button onclick="changePage(' + i + ')">' + i + '</button>');
    }
    $(".index_buttons").append('<button onclick="changePage(\'next\')">Next</button>');
    highlightIndexButton();
}

function changePage(direction) {
    if (direction === 'prev' && current_index > 1) {
        current_index--;
    } else if (direction === 'next' && current_index < max_index) {
        current_index++;
    } else if (typeof direction === 'number') {
        current_index = direction;
    }

    // Update the displayed complaints
    // You may need to make an AJAX request or reload the page with the new page parameter

    displayIndexButtons();
}

function highlightIndexButton() {
    $(".index_buttons button").removeClass("active");
    $(".index_buttons button:eq(" + (current_index) + ")").addClass('active');
}

displayIndexButtons();




    </script>


<script src="js/jquery1-3.4.1.min.js"></script>

<script src="js/popper1.min.js"></script>

<script src="js/bootstrap1.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/count_up/jquery.waypoints.min.js"></script>

<script src="vendors/chartlist/Chart.min.js"></script>

<script src="vendors/count_up/jquery.counterup.min.js"></script>

<script src="vendors/swiper_slider/js/swiper.min.js"></script>

<script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="vendors/gijgo/gijgo.min.js"></script>

<script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatable/js/buttons.flash.min.js"></script>
<script src="vendors/datatable/js/jszip.min.js"></script>
<script src="vendors/datatable/js/pdfmake.min.js"></script>
<script src="vendors/datatable/js/vfs_fonts.js"></script>
<script src="vendors/datatable/js/buttons.html5.min.js"></script>
<script src="vendors/datatable/js/buttons.print.min.js"></script>
<script src="js/chart.min.js"></script>

<script src="vendors/progressbar/jquery.barfiller.js"></script>

<script src="vendors/tagsinput/tagsinput.js"></script>

<script src="vendors/text_editor/summernote-bs4.js"></script>
<script src="vendors/apex_chart/apexcharts.js"></script>

<script src="js/custom.js"></script>
<script src="vendors/apex_chart/bar_active_1.js"></script>
<script src="vendors/apex_chart/apex_chart_list.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <script src =main.js></script> -->
<!-- Add this script before your closing </body> tag -->

</body>

<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 13:38:43 GMT -->
</html>
<?php
require_once __DIR__ . '/../../Controller/addrepocontroller.php';
require_once __DIR__ . '/../../Controller/repocontroller.php';
include_once __DIR__ . '/../../Controller/userModel.php';


require_once __DIR__ . '/../../Config.php';
// Create an instance of RepoController
$repoController = new userModel();

// Assuming you have a listResponses method in RepoController
$listOfrepo = $repoController->getResponses();

// Handle update or delete actions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["update"])) {
        // Handle update action here, using $_POST["idComplaint"] to get the complaint id
        $idComplaintToUpdate = $_POST["idComplaint"];
        // Implement the update logic
    } elseif (isset($_GET["id"])) {
        // Handle delete action here, using $_GET["id"] to get the complaint id
        $idComplaintToDelete = $_GET["id"];
        // Implement the delete logic
    }
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
<style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
         * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background-color: blanchedalmond; */
    background: url(back.jpg);
}

main.tablee {
    width: 82vw;
    height: 90vh;
    background-color: #fff5;
    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem black;
    border-radius: .8rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    overflow: hidden;
}

table,
th,
td {
    padding: 2rem;
    padding-left: 8rem;
}
thead th{
    position: sticky;
    top: 0;
    left: 0;
    background-color: #A1B3D1;
    border-radius: 10px;
    z-index: 1;

}

.table_header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    


}

.table_header .input_group {
    width:25%;
    height: 100%;
    background-color: #fff5;
    padding: 0 .8rem;
    border-radius: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: .2s;
}


.table_header .input_group:hover {
    width:35%;
    background-color: #fff7;
    box-shadow: 0 .1rem .4rem #0002;

}

.table_header .input_group img{
    width:1.1rem;
    height: 1.2rem;
}
.table_header .input_group input{
    width:100%;
    padding: 0 .5rem 0 .3rem;
    background-color: transparent;
    border: none;
    outline: none;
}

.table_body {
    width: 95%;
    background-color: #fffb;
    border-radius: .6rem;
    overflow: auto; /* Add overflow property to enable scrolling if needed */
    margin-top: .8rem;
    max-height: calc(89% - .8rem); /* Add margin-top to create space between header and table */
}

.table_body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}
.table_body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}
.table_body:hover::-webkit-scrollbar-thumb{
    visibility: visible;
}

tbody tr:nth-child(even){
    background-color: #0000000b;
}
tbody tr:hover{
    background-color: #fff6;
}

.delete-button {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: rgb(20, 20, 20);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: 0.3s;
  overflow: hidden;
  position: relative;
  /* z-index: -1; */
}

.delete-svgIcon {
  width: 15px;
  transition-duration: 0.3s;

}

.delete-svgIcon path {
  fill: white;
}

.delete-button:hover {
  width: 90px;
  border-radius: 50px;
  transition-duration: 0.3s;
  background-color: rgb(255, 69, 69);
  align-items: center;
}

.delete-button:hover .delete-svgIcon {
  width: 20px;
  transition-duration: 0.3s;
  transform: translateY(60%);
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  transform: rotate(360deg);
}

.delete-button::before {
  display: none;
  content: "Delete";
  color: white;
  transition-duration: 0.3s;
  font-size: 2px;
}

.delete-button:hover::before {
  display: block;
  padding-right: 10px;
  font-size: 13px;
  opacity: 1;
  transform: translateY(0px);
  transition-duration: 0.3s;
}
    </style>
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


<main class="tablee">
    
     <section class="table_header">

        <h1>List of reponses</h1>
        <div class="input_group">
            <input type="search" placeholder="Search Data...">
            <img src="search.png" alt="">
        </div>
   
    </section>
    <?php
    
if (!empty($listOfrepo)) {
?>
    <section class="table_body">
        <table>
            <thead>
                <tr>
                    <th>References feedback</th>
                    <th>Responses</th>
                    <th>Delete</th>
                    <!-- <th>reponse</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listOfrepo as $complaint) {
                ?>
                    <tr>
                        <td><?= htmlspecialchars($complaint['feedback_id']); ?></td>
                        <td><?= htmlspecialchars($complaint['response_text']); ?></td>

                        <td>
                            <!-- Delete button -->
                            <form method="POST" action="../controller/deleterepo.php">
                                <input type="hidden" name="feedback_id" value="<?= htmlspecialchars($complaint['feedback_id']); ?>">
                                <button class="delete-button" type="submit" name="delete" value="delete">
                                    <input type="hidden" name="responseId" value="<?= $complaint['id']; ?>">
                                    <svg class="delete-svgIcon" viewBox="0 0 448 512">
                                        <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path> </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
<?php
} else {
    echo "No complaints found.";
}
?>


</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var searchInput = document.getElementById('search');
        var rows = document.querySelectorAll('.table_body tbody tr');

        searchInput.addEventListener('input', function () {
            filterResponses();
        });

        function filterResponses() {
            var searchValue = searchInput.value.toLowerCase();

            rows.forEach(function (row) {
                var feedbackId = row.querySelector('td:nth-child(1)').innerText.toLowerCase();
                var responseText = row.querySelector('td:nth-child(2)').innerText.toLowerCase();

                var matchesSearch = feedbackId.includes(searchValue) || responseText.includes(searchValue);

                if (matchesSearch) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    });
</script>

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
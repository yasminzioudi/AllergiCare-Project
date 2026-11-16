<?php
include_once '../../Model/rendezvous.php';
include_once '../../Controller/rendezvousC.php';
session_start();
$error = "";
$rendezvous = NULL;
$rendezvousC = new rendezvousC();
$listRDV=$rendezvousC->afficherRDV();

?>
<?php include "segment.php"; ?>

    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">

                </div>
            </div>
        </div>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Data table</h3>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4>Table</h4>
                                        <div class="box_right d-flex lms_block">
                                           
                                            <div class="serach_field_2">
                                              
                                                <div class="search_inner">
                                                    <form Active="#">
                                                        <div class="search_field">
                                                            <input type="text" name="search_box"  placeholder="Type Here..." id="search_box" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeyup="javascript:load_data(this.value)" onfocus="javascript:load_search_history()" />
                               
                                                            
                                                        </div>
                                                    </form>
                                                    <span id="search_result"></span>
                                                </div>
                                            </div>
                                            <script>
                        function load_search_history() {
                            var search_query = document.getElementsByName('search_box')[0].value;

                            if (search_query == '') {

                                fetch("process_data.php", {

                                    method: "POST",

                                    body: JSON.stringify({
                                        action: 'fetch'
                                    }),

                                    headers: {
                                        'Content-type': 'application/json; charset=UTF-8'
                                    }

                                }).then(function (response) {

                                    return response.json();

                                }).then(function (responseData) {

                                    if (responseData.length > 0) {

                                        var html = '<ul class="list-group">';

                                        html += '<li class="list-group-item d-flex justify-content-between align-items-center"><b class="text-primary"><i>Your Recent Searches</i></b></li>';

                                        for (var count = 0; count < responseData.length; count++) {

                                            html += '<li class="list-group-item text-muted" style="cursor:pointer"><i class="fas fa-history mr-3"></i><span onclick="get_text(this)">' + responseData[count].search_query + '</span> <i class="far fa-trash-alt float-right mt-1" onclick="delete_search_history(' + responseData[count].id + ')"></i></li>';

                                        }

                                        html += '</ul>';

                                        document.getElementById('search_result').innerHTML = html;

                                    }

                                });

                            }
                        }

                        function get_text(event) {
                            var string = event.textContent;

                            document.getElementsByName('search_box')[0].value = string;

                            document.getElementById('search_result').innerHTML = '';
                        }

                        function load_data(query) {
                            if (query.length > 1) {
                                var form_data = new FormData();

                                form_data.append('query', query);

                                var ajax_request = new XMLHttpRequest();

                                ajax_request.open('POST', 'process_data.php');

                                ajax_request.send(form_data);

                                ajax_request.onreadystatechange = function () {
                                    if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                                        var response = JSON.parse(ajax_request.responseText);

                                        var html = '<div class="list-group">';

                                        if (response.length > 0) {
                                            for (var count = 0; count < response.length; count++) {
                                                html += '<a href="#" class="list-group-item list-group-item-action" onclick="get_text(this)">' + response[count].name + '</a>';
                                            }
                                        } else {
                                            html += '<a href="#" class="list-group-item list-group-item-action disabled">No Data Found</a>';
                                        }

                                        html += '</div>';

                                        document.getElementById('search_result').innerHTML = html;
                                    }
                                }
                            } else {
                                document.getElementById('search_result').innerHTML = '';
                            }
                        }
                    </script>
                                            <div class="add_button ms-2">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory"
                                                    class="btn_1">Export Excel</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div >

                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                <th scope="col">  <a href="filter.php?value=id">ID </a></th>
                                                    <th scope="col">   <a href="filter.php?value=nom">Nom</a></th>
                                                    <th scope="col">  <a href="filter.php?value=prenom"> Prenom</a></th>
                                                   <th scope="col">  <a href="filter.php?value=email"> Email</a></th>
                                                   <th scope="col">  <a href="filter.php?value=phone"> Phone</a></th>
                                                  <th scope="col">  <a href="filter.php?value=time"> Time</a></th>
                                                  <th scope="col">  <a href="filter.php?value=date">  Date</a></th>
                                                  <th scope="col">  <a href="filter.php?value=message">  Message</a></th>
                                                 <th scope="col">  <a href="filter.php?value=etat"> Etat</a></th>
                                                  <th scope="col">  <a> Approve</a></th>
                                                  <th scope="col"> <a>  Delete</a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                               $newArray = [];
                                               foreach ($listRDV as $r) {
                                                if($_SESSION["id"]==$r['doctor']){
                                            ?>
                                                <tr>
                                                <td><?php echo $r['id']; ?></td>
                                                <td><?php echo $r['nom']; ?></td>
                                                <td><?php echo $r['prenom']; ?></td>
                                                <td><?php echo $r['email']; ?></td>
                                                <td><?php echo $r['phone']; ?></td>
                                                 <td><?php echo $r['time']; ?></td>
                                                <td><?php echo $r['date']; ?></td>
                                                <td><?php echo $r['message']; ?></td>
                                                <td><?php echo $r['etat']; ?></td>
                                                <td><a  <?php  $id=$r['id']; echo "href='accept.php?id=$id'"; ?> class="status_btn">Approve</a></td>
                                                <td><a  <?php  $id=$r['id']; echo "href='deleteC.php?id=$id'"; ?> class="status_btn">Delete</a></td>
                                                </tr>
                                                <?php
                       $day = date('d', strtotime($r['date']));
                       $month = date('m', strtotime($r['date']));
                       $year = date('Y', strtotime($r['date']));
                       $newItem = [
                        'day' => $day,
                        'mounth' => $month,
                        'year' => $year
                    ];
                    $newArray[] = $newItem;
                    }
                }
                      ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#">
                                    Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap.min.html"></script>

    <script src="js/metisMenu.js"></script>

    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>

    <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="vendors/scroll/scrollable-custom.js"></script>

    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  
    <link rel="stylesheet" href="style.css">
<div class="ca">
    <div class="wrapper">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
    </div>
    
 </div>
 
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 13:40:12 GMT -->

</html>
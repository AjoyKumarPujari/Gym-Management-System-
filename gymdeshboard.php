<?php
session_start();
include 'connectDB.php';
?>


<!doctype html>
<html lang="en">

<head>
  <title>Deshboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          CrossFit Gym
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="javascript:void(0)">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <!-- <a class="nav-link" href="clients.php"> -->
            <a class="nav-link" href="viewmembers.php">
              <i class="material-icons">person</i>
              <p>Members</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="plans.php">
              <i class="material-icons">library_books</i>
              <p>Plans</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="staffs.php">
              <i class="material-icons">person</i>
              <p>Staffs</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="devices.php">
              <i class="material-icons">fitness_center</i>
              <p>Devices</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="suppliments.php">
              <i class="material-icons">reorder</i>
              <p>Stocks</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="viewsales.php">
              <i class="material-icons">paid</i>
              <p>Sales</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="read tag.php">
              <i class="material-icons">verified</i>
              <p>Check Id</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <div ><button type="button" class="btn btn-primary btn-right">Open gate</button></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="Logout.php">
                  <i class="material-icons">logout</i>
                  <p class="d-lg-none d-md-block">
                    Logout
                  </p>
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">group</i>
                  </div>
                  <p class="card-category">Members</p>
                  <?php
                  include 'connectDB.php';
                  $query = "SELECT id from members order by id";
                  $query_run = mysqli_query($conn,$query);
                  $row = mysqli_num_rows($query_run);
                  echo'<h3>'.$row.'</h3>';
 
                  ?>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="viewmembers.php" >View All</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">library_books</i>
                  </div>
                  <p class="card-category">Plans</p>
                  <?php
                  include 'connectDB.php';
                  $query = "SELECT id from plans order by id";
                  $query_run = mysqli_query($conn,$query);
                  $row = mysqli_num_rows($query_run);
                  echo'<h3>'.$row.'</h3>';
 
                  ?>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="plans.php" >View All</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">fitness_center</i>
                  </div>
                  <p class="card-category">Devices</p>
                  <?php
                  include 'connectDB.php';
                  $query = "SELECT id from devices order by id";
                  $query_run = mysqli_query($conn,$query);
                  $row = mysqli_num_rows($query_run);
                  echo'<h3>'.$row.'</h3>';
 
                  ?>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="devices.php" >View All</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                 <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                        <i class="material-icons">group</i>
                        </div>
                        <p class="card-category">Staffs</p>
                        <?php
                        include 'connectDB.php';
                        $query = "SELECT id from staff order by id";
                        $query_run = mysqli_query($conn,$query);
                        $row = mysqli_num_rows($query_run);
                        echo'<h3>'.$row.'</h3>'; 
                        ?>
                      </div>
                      <div class="card-footer">
                         <div class="stats">
                         <a href="staffs.php" >View All</a>
                         </div>
                     </div>
                    </div>
                  </div>
                 
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">local_mall</i>
                  </div>
                  <p class="card-category">Sales</p>
                  <?php
                  include 'connectDB.php';
                  $query = "SELECT id from sales order by id";
                  $query_run = mysqli_query($conn,$query);
                  $row = mysqli_num_rows($query_run);
                  echo'<h3>'.$row.'</h3>';
 
                  ?>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="viewsales.php" >View All</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">shopping_cart</i>
                  </div>
                  <p class="card-category">Stock</p>
                  <?php
                  include 'connectDB.php';
                  $query = "SELECT id from stock order by id";
                  $query_run = mysqli_query($conn,$query);
                  $row = mysqli_num_rows($query_run);
                  echo'<h3>'.$row.'</h3>';
 
                  ?>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="suppliments.php" >View All</a>
                  </div>
                </div>
              </div>
            </div>
          </div>   
          <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="card">
                <div class="card-header card-header-primary">
                <div class="row">
                     <div class="col-xl-6 col-md-12">
                     <h4 >New Members </h4>
                     </div>
                     <div class="col-xl-6 col-md-12">
                     <a class="btn btn-success float-right" href="viewmembers.php">View all</a>
                     </div>
                </div>
                </div>
                <div class="card-body table-responsive text-center" >
                <table class="table table-hover " >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Plan </th>
					         <th >Date Of Start</th>
                      <th >Date Of End</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody >
                        <?php
                        include 'connectDB.php';
                        $sql="Select * from members ORDER BY id DESC LIMIT 4";
                        $result=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                        while($row=mysqli_fetch_array($result))
                        {
                          echo '<tr>';
                          echo '<td>'.$row[1].'</td>';
                          echo '<td>'.$row[2].' </td>'; 
                          echo '<td>'.$row[8].' </td>';  
                          echo '<td>'.$row[9].' </td>';     
                         echo '</tr>';
                        }
                        ?>    
                      </table>
                </div>
              </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="card">
                <div class="card-header card-header-primary">
                <div class="row">
                     <div class="col-xl-3 col-md-12">
                     <h4 >Last Sales </h4>
                     </div>
                     <div class="col-xl-8 col-md-12">
                     <a class="btn btn-success float-right" href="viewsales.php">View all</a>
                     </div>
                </div>
                </div>
                <div class="card-body table-responsive text-center" >
                <table class="table table-hover " >
                  <thead>
                    <tr>
                    <th> Item Name</th>
                      <th>Quantity</th>
                      <th>Total Amount</th>
                      <th>Customer Name</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody >
                        <?php
                        include 'connectDB.php';
                        $sql="Select * from sales ORDER BY id DESC LIMIT 4";
                        $result=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                        while($row=mysqli_fetch_array($result))
                        {
                          echo '<tr>';
                          echo '<td>'. $row['item'] . '</td>';
                          echo '<td>'. $row['quantity'] . '</td>';
                          echo '<td>'. $row['totalamount'] . '</td>';
                          echo '<td>'. $row['customername'] . '</td>';  
                          echo '</tr>';
                        }
                        ?>    
                      </table>
                </div>
              </div>
              </div>
          </div>   
          <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="card">
                <div class="card-header card-header-warning">
                <div class="row">
                     <div class="col-xl-3 col-md-12">
                     <h4 >Plans Report </h4>
                     </div>
                     
                </div>
                </div>
                <div class="card-body table-responsive text-center" style="background-color: #EBEBEB">
                 
                <div id="piechart" style="width: 100%; height: 300px;"></div>
                
                  <?php  
                  include 'connectDB.php'; 
                  $query = "SELECT plan, count(*) as number FROM members GROUP BY plan";  
                  $result = mysqli_query($conn, $query);  
                  ?> 
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">  
                  google.charts.load('current', {'packages':['corechart']});  
                  google.charts.setOnLoadCallback(drawChart);  
                  function drawChart()  
                  {  
                        var data = google.visualization.arrayToDataTable([  
                                  ['plan', 'Number'],  
                                  <?php  
                                  while($row = mysqli_fetch_array($result))  
                                  {  
                                      echo "['".$row["plan"]."', ".$row["number"]."],";  
                                  }  
                                  ?>  
                            ]);  
                        var options = {  
                              title: 'Percentage of Plans Enroll by Members',  
                              //is3D:true,  
                              pieHole: 0.4  
                            };  
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                        chart.draw(data, options);  
                  }  
                </script> 
                
                </div>
              </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="card ">
                <div class="card-header card-header-success">
                <div class="row">
                     <div class="col-xl-12 col-md-12">
                     <h4 >Recent Sales Report</h4>
                     </div>
                     
                </div>
                </div>
                <div class="card-body table-responsive text-center" style="background-color: #EBEBEB">
                  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <canvas id="myChart1" width="400" height="221"></canvas>
                
                <script>
                var ctx = document.getElementById('myChart1').getContext('2d');
                <?php
                include 'connectDB.php'; 
                // $sql ="SELECT MONTH(saledate) AS month,MONTHNAME(saledate) AS MName,YEAR(saledate) AS year ,SUM(quantity) AS total_sales FROM sales GROUP BY month; ";
                $sql="SELECT MONTH(saledate) AS month, CONCAT(MONTHNAME(saledate), ', ',YEAR(saledate)) as MonthYear,SUM(quantity) AS total_sales FROM sales GROUP BY month";
                $result = mysqli_query($conn,$sql);
                $chart_data="";
                while ($row = mysqli_fetch_array($result)) 
                { 
        
                   $month[]  = $row['month']  ;
                   $monthYear[]  = $row['MonthYear']  ;
                   //$year[]  = $row['year']  ;
                   $sales[] = $row['total_sales']; 
                   
                }
                ?>
                var myChart1 = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($monthYear); ?>,
                        
                        datasets: [{
                            label: 'Total Sales' ,
                           
                            data:<?php echo json_encode($sales); ?>,
                            backgroundColor: [
                                
                                'rgba(75, 192, 200, 1.5)'
                            ],
                            borderColor: [
                               
                                'rgba(75, 192, 192, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
                </script>
              </div>
              </div>
              </div>
          </div>  
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Ajoy Kumar Pujari
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Tech Savvy</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>
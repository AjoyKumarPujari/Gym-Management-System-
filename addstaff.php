<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="assets/css/material-dashboard.css"/>
  <link href="..css/style.css"/>
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   ">
            <a class="nav-link" href="template.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="clients.php">
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
          <li class="nav-item active">
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
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Deshboard/Staff </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
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
            <div class=" col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                <div class="row">
                     <div class="col-xl-3 col-md-12">
                     <h4 >Staff </h4>
                     </div>
                     <div class="col-xl-8 col-md-12">
                     <a class="btn btn-success float-right" href="plans.php">View Staff</a>
                     </div>
                </div>
                </div>
                <div class="card-body table-responsive">
                <div class="row">
            <div class="col-md-12">
              <div class="card">
               
              <div class="card-body">
                  <form id ="addstaff" name="addstaff" action="insertstaff.php" method="POST" onsubmit="return validation()">
                    
                    <div class="row">
                    <div class="col-lg-8 col-md-12">
                            <div class="form-group ">
                            <label class="bmd-label-floating"> Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                            
                            </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                    <div class="form-group ">
                        <label for="stafftype">Select Staff Type</label>
                        <select class="form-control " name ="stafftype" id="stafftype"required>
                        <option class="text-dark">Accountant</option>
                        <option class="text-dark">Employee</option>
                        <option class="text-dark">Receptionist</option>
                        <option class="text-dark">Trainer/Dietitian</option>
                       
                        </select>
                        
                    </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone Number </label>
                          <div class="input-group mb-4 mr-sm-4">
                              
                          <input type="text" id="phonenumber" name="phonenumber" class="form-control"required>
                          
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alt Phone Number </label>
                          <div class="input-group mb-4 mr-sm-4">
                          <input type="text" id="altphonenumber" name="altphonenumber" class="form-control"required>
                          
                          </div>
                        </div>
                        
                      </div>
                   
                      <div class="col-lg-3 col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email </label>
                          <div class="input-group mb-4 mr-sm-4">
                          <input type="mail" id="email" name="email" class="form-control" required>
                          
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-lg-3 col-md-12">
                      <div class="form-group ">
                        <label for="gender">Gender</label>
                        <select class="form-control " name="gender" id="gender" required>
                        <option class="text-dark">Male</option>
                        <option class="text-dark">Female</option>
                        <option class="text-dark">Others</option>
                        
                       
                        </select>
                       
                        </div>
                      </div>
                     
                      
                      
                    </div>
                    
                    <div class="row">
                    <div class=" col-md-12">
                            <div class="form-group">
                            <label class="bmd-label-floating">Address</label>
                            <input type="textarea" id="address" name="address" class="form-control" required>
                            
                            </div>
                    </div>
                    </div> 
                    </div>
                 </div>
                    <button type="submit" name="submit" class="btn btn-secondary pull-right">Cancel </button>
                    <button type="submit" class="btn btn-primary pull-right">Submit </button>
                    
                    
                    
                  </form>
                  <script>
                    function validation()
                    {
                      var phone = document.forms['addstaff']['phonenumber'];
                      var altphone = document.forms['addstaff']['altphonenumber'];
                      
                      if(isNaN(phone.value) || phone.value.length!=10 || isNaN(altphone.value) || altphone.value.length!=10)
                      {
                        alert('Invalid Phone Number');
                        return false;
                      }
                      return true;
                    }
                  </script>
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
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
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

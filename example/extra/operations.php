

<?php
require_once('../include/operationaccess.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Operations
  </title>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>  

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
 
 <!--     Fonts and icons     -->
 <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../assets/css/style.css" rel="stylesheet" />
  <!-- CSS Files -->

  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />


 
<style>
  a[disabled="disabled"] {
    pointer-events: none;
    opacity: .4;
}

p{

  font-size:12px;
}
</style>
</head>

<body class="white-content">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper" >
        <div class="logo">
       
          <a href="javascript:void(0)" class="simple-text logo-normal text-center">
            Creation
          </a>
        </div>
        <ul class="nav">
          <li >
          <a href="./index.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Admin</p>
            </a>
          </li>
          <li>
          <a href="./marketing.php">
              <i class="tim-icons icon-coins"></i>
              <p>Marketing</p>
            </a>
          </li>
          <li class="active">
            <a href="./operations.php">
              <i class="tim-icons icon-single-copy-04"></i>
              <p>Operations</p>
            </a>
          </li>
          <li>
              <a href="./billing.php">
                <i class="tim-icons icon-settings-gear-63"></i>
                <p>Billing</p>
              </a>
            </li>
          <li>

            <a href="./profile.php">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
         
         
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
             
              
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="./profile.php" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="../index.php?logout=1" class="nav-item dropdown-item">Log out</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- End Navbar -->
     
      <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 ">
              <div class="card card-stats w3-dropdown-hover">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                  <div class="w3-dropdown-content w3-bar-block w3-border card-header-warning">
                  <a class="dropdown-item " data-toggle="modal" data-target="#labouradd">Add</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal11" href="../labour/modify.php"  id="l">Modify</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal13" href="../labour/view.php">View</a>
                    <a class="dropdown-item" id="requestl">Request Labour Modify Access</a>
                </div>
                    <i class="fa fa-child"></i>
                  </div>
                  <p class="card-category">People</p>
                  <h3 class="card-title">Labour</h3>
                </div>
                <div class="card-footer">
                
                <div class="stats">
                  <i class="fa fa-child">&nbsp;Hover to explore Labour.</i> 
                </div>
              </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 w3-dropdown-hover">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                  <div class="w3-dropdown-content w3-bar-block w3-border card-header-success">
                <a class="dropdown-item" data-toggle="modal" data-target="#siteadd">Add</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#add1">Upload Image</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal21" href="../site/modify.php" id="s">Modify</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal23" href="../site/view.php">View</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal24" href="../site/rate.php">Add Rate</a>
                    <a class="dropdown-item" id="requests">Request Site Modify Access</a>
                </div>
                    <i class="fa fa-building"></i>

                   
                  </div>
                  <p class="card-category">Location</p>
                  <h3 class="card-title">Site</h3>

                  
                </div>

                <div class="card-footer">
                
                  <div class="stats">
                    <i class="fa fa-building">&nbsp;Hover to explore the Sites.</i> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 w3-dropdown-hover">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                  <div class="w3-dropdown-content w3-bar-block w3-border card-header-danger">
                <a class="dropdown-item" data-toggle="modal" data-target="#displayadd">Add</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal31"  href="../display/modify.php" id="d">Modify</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal33"  href="../display/view.php">View</a>
                    <a class="dropdown-item" id="requestd">Request Display Modify Access</a>
                </div>
                    <i class="fa fa-envelope-open"></i>
                  </div>
                  <p class="card-category">View</p>
                  <h3 class="card-title">Display</h3>
                </div>
                <div class="card-footer">
                
                  <div class="stats">
                    <i class="fa fa-envelope-open">&nbsp;Hover to explore the Display.</i> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 w3-dropdown-hover">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                  <div class="w3-dropdown-content w3-bar-block w3-border card-header-info">
                <a class="dropdown-item" data-toggle="modal" data-target="#transadd" >Add</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal41" href="../transaction/modify.php" id="t">Modify</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal43" href="../transaction/view.php">View</a>
                    <a class="dropdown-item" id="requestt">Request Transaction Modify Access</a>
                </div>
                    <i class="fa fa-credit-card"></i>
                  </div>
                  <p class="card-category">Profit</p>
                  <h3 class="card-title">Transactions</h3>
                </div>
                <div class="card-footer">
                
                  <div class="stats">
                    <i class="fa fa-credit-card">&nbsp;Hover to explore the transactions.</i> 
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 w3-dropdown-hover">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                  <div class="w3-dropdown-content w3-bar-block w3-border card-header-primary">
                <a class="dropdown-item" data-toggle="modal" data-target="#myModal51" href="../report/labour.php">LABOUR WISE REPORT</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal52" href="../report/site.php" >SITE WISE REPORT</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal53" href="../report/display.php">DISPLAY WISE REPORT</a>
                    <a class="dropdown-item" href="#">AVAILABLE</a>
                </div>
                    <i class="fa fa-edit"></i>
                  </div>
                  <p class="card-category">Documents</p>
                  <h3 class="card-title">Reports</h3>
                </div>
                <div class="card-footer">
                
                <div class="stats">
                  <i class="fa fa-edit">&nbsp;Hover to explore the Reports.</i> 
                </div>
              </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 w3-dropdown-hover">
              <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                  <div class="w3-dropdown-content w3-bar-block w3-border card-header-rose ">
                  <a class="dropdown-item" data-toggle="modal" data-target="#clientadd" >Add</a>
                  <a class="dropdown-item" data-toggle="modal" data-target="#myModal41" href="#" id="t">Modify</a>
                  <a class="dropdown-item" data-toggle="modal" data-target="#myModal63" href="../client/view.php">View</a>
                  <a class="dropdown-item" id="requestt">Request Transaction Modify Access</a>
                  </div>
                  <i class="fa fa-briefcase"></i>
                  </div>
                  <p class="card-category" >Customer</p>
                  <h3 class="card-title">Client</h3>
                </div>
               
                <div class="card-footer">
                
                  <div class="stats">
                    <i class="fa fa-briefcase">&nbsp;Hover to explore the client records.</i> 
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
</div>
         
<footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" >
                Creation
              </a>
            </li>
           
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creation</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
   
        
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
 
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
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

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
    $(document).on("click","#nop",function(){
 alert("Sorry You are not authorized ! ");
});
  </script>
 
 <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>



    <div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>



    <div class="modal fade" id="myModal24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>









    <div class="modal fade" id="myModal31" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>



    <div class="modal fade" id="myModal32" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal33" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>

    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>

    <div class="modal fade" id="myModal41" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal42" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>

    <div class="modal fade" id="myModal43" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>



    <div class="modal fade" id="myModal51" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>



    <div class="modal fade" id="myModal52" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal53" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div>

     <div class="modal fade" id="myModal63" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    
    <!--  For mailing --> 

    


      <div id="displayadd" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form method='post' action="../display/add.php">
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">Add Information</h4> 
            </div>
            
            <!-- Modal body -->
             <div class="modal-body">
              
              <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge  	far fa-clipboard"></i></div>
                 <div class="w3-rest">
                  <input type="text" class=" w3-input w3-border w3-round-xxlarge" name="display_id" placeholder="Enter Display Id" required>
                 </div>
              </div>

     
               <div class="w3-row w3-section">
                 <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-marker"></i></div>
                  <div class="w3-rest">
                     <input type="text" class=" w3-input w3-border w3-round-xxlarge" name="caption" placeholder="Enter Caption" Required >
                  </div>
               </div>

                 
                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge far fa-calendar-alt"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="date" name="opening_date" required >
                    </div>
                </div>
<div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge far fa-user"></i></div>
                    <div class="w3-rest">
                  <input type="text" class=" w3-input w3-border w3-round-xxlarge" list="client_name" name="c_name" placeholder="Select Client" style="margin-bottom: 15px" autocomplete="off" required>
                    <datalist id="client_name">
                      <?php
                     
                        $query = "select c_name from client order by c_name";
                        $results = $conn->query($query);
                        
                        while ($rows= $results->fetch_assoc()){ 
                      ?>
                      <option value="<?php echo $rows['c_name'];?>">
                     <?php
                       } 
                      ?>
                    </datalist>     
                     </div>
                </div>      
                </div>           
                      <!-- Modal footer -->
                      <div class="modal-footer">
                      
                      <button style="width:50%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit" id="load" 
                      data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Submit</button>

                      <button type="button" style="width:50%" class="w3-button w3-purple w3-round-xxlarge" data-dismiss="modal">Close</button>
                      </div>
            </form>  
          </div>
        </div>
      </div>

       


       <div id="clientadd" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form method='post' action="../client/add.php">
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">Add Information</h4> 
            </div>
            
            <!-- Modal body -->
             <div class="modal-body">
              
              <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge    fas fa-user-alt"></i></div>
                 <div class="w3-rest">
                  <input type="text" class=" w3-input w3-border w3-round-xxlarge" name="c_name" placeholder="Enter Client Name" required>
                 </div>
              </div>

              <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-location-arrow"></i></div>
                 <div class="w3-rest">
                  <input type="text" class=" w3-input w3-border w3-round-xxlarge" name="address" placeholder="Enter Address" required>
                 </div>
              </div>


              <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge    fas fa-phone"></i></div>
                 <div class="w3-rest">
                  <input type="tel" class=" w3-input w3-border w3-round-xxlarge" name="office_tel" placeholder="Enter Office tel" required>
                 </div>
              </div>


              <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-mobile-alt"></i></div>
                 <div class="w3-rest">
                  <input type="tel" class=" w3-input w3-border w3-round-xxlarge" name="mobile" placeholder="Enter Mobile No." required>
                 </div>
              </div>


              <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge   fas fa-envelope"></i></div>
                 <div class="w3-rest">
                  <input type="text" class=" w3-input w3-border w3-round-xxlarge" name="email_id" placeholder="Enter Email Id" required>
                 </div>
              </div>


               <div class="w3-row w3-section">
                 <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-headset"></i></div>
                  <div class="w3-rest">
                     <input type="text" class=" w3-input w3-border w3-round-xxlarge" name="contact_person" placeholder="Enter Contact Person" Required >
                  </div>
               </div>

                 
                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-address-card"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="text" name="reffered_by" placeholder="Enter Refffered By" required >
                    </div>
                </div>


                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas far fa-clipboard"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="text" name="cordinator" placeholder="Enter Cordinator" required >
                    </div>
                </div>

             </div>
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
                      
                      <button style="width:50%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit" id="load" 
                      data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Submit</button>

                      <button type="button" style="width:50%" class="w3-button w3-purple w3-round-xxlarge" data-dismiss="modal">Close</button>
                      </div>
            </form>  
          </div>
        </div>
      </div>
 


 <div id="add1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          <form action="../site/upload.php" method="post" enctype="multipart/form-data" >
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">Upload Image</h4> 
            </div>
            
            <!-- Modal body -->
             <div class="modal-body">

               <div class="w3-row w3-section">
                 <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-building"></i></div>
                  <div class="w3-rest">
                     <input type="text" class=" w3-input w3-border w3-round-xxlarge" list="sit_name" name="site_name" placeholder="Select Site" style="margin-bottom: 15px" autocomplete="off" required>
                    <datalist id="sit_name">
                      <?php
                     
                        $query = "select site_name from site order by site_name";
                        $results = $conn->query($query);
                        
                        while ($rows= $results->fetch_assoc()){ 
                      ?>
                      <option value="<?php echo $rows['site_name'];?>">
                     <?php
                       } 
                      ?>
                    </datalist>
                  </div>
               </div>



             <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-upload"></i></div>
              <div class="w3-rest">
              
                  Select Image Files to Upload:
                  <hr>
                  <div class="w3-twothird">
                  <input class="w3-input w3-border" type="file" name='fileToUpload'>
                  </div>
                  
             
              </div>
          </div>
              
              </div>

     
              
                      <!-- Modal footer -->
                      <div class="modal-footer">
                      
                      <button style="width:50%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit" id="load" 
                      data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Submit</button>

                      <button type="button" style="width:50%" class="w3-button w3-purple w3-round-xxlarge" data-dismiss="modal">Close</button>
                      </div>
            </form>  
          </div>
        </div>
      </div>








      <div id="labouradd" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form method='post' action="../labour/add.php">
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">Add Information</h4> 
            </div>
            
            <!-- Modal body -->
             <div class="modal-body">
              
              <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-user"></i></div>
                 <div class="w3-rest">
                  <input type="text" class=" w3-input w3-border w3-round-xxlarge" placeholder="Labour Name" name="l_name" required>
                 </div>
              </div>

     
               <div class="w3-row w3-section">
                 <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-building"></i></div>
                  <div class="w3-rest">
                     <input type="text" class=" w3-input w3-border w3-round-xxlarge" placeholder="Company Name"  name="company_name" Required >
                  </div>
               </div>

                 
                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-location-arrow"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="text" placeholder="Office Address"  name="office_address" required >
                    </div>
                </div>


                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-university"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="text" placeholder="City"  name="city"  required >
                    </div>
                </div>


                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-map-marker-alt"></i></div>
                    <div class="w3-rest">
                    <input  class=" w3-input w3-border w3-round-xxlarge" type="text" placeholder="Residence"  name="residence"  required >
                    </div>
                </div>


                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-phone"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="Number" placeholder="Residence No" name="residence_no" required >
                    </div>
                </div>

                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge far fas fa-mobile"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="Number" placeholder="Office No" name="office_no"required >
                    </div>
                </div>

                         
                         

                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-user-circle"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="text" placeholder="Contact Person" name="contact_person" required >
                    </div>
                </div>

                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-alt"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="date" placeholder="Joining Date" name="joining_date" required >
                    </div>
                </div>
             </div>
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
                      
                      <button style="width:50%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit" id="load" 
                      data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Submit</button>

                      <button type="button" style="width:50%" class="w3-button w3-purple w3-round-xxlarge" data-dismiss="modal">Close</button>
                      </div>
            </form>  
          </div>
        </div>
      </div>

             


   


    <div id="siteadd" class="modal fade" role="dialog">
       <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form method='post' action="../site/add.php" >
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">Add Information</h4> 
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              

               <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-passport"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="text" name="site_code" placeholder="Site Code" >
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-marker-alt"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="text" name="site_name" placeholder="Site Name" >
              </div>
          </div>

         

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-pin"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="phone" name="site_pin" placeholder="Site Pin Code" >
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-globe-asia"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="text" name="area" placeholder="Area" >
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-marked-alt"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" id="sect" list="section" type="text" name="section" placeholder=" Section" autocomplete="off">

                <datalist id="section">
                  <option value="W1">
                  <option value="W2">
                  <option value="C">
                  <option value="H">
               </datalist>

              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-grip-lines"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="phone" name="length" placeholder="Width" >
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-grip-lines-vertical"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="phone" name="breadth" placeholder="Height" >
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-marked"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="text" name="address" placeholder="Address" >
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-location-arrow"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="text" name="location" placeholder="Location" >
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-landmark"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="text" name="landmark" placeholder="Landmark" >
              </div>
          </div>
          


            <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge"  list="ill" type="text" name="ill" placeholder="Illuminate" autocomplete="off">

                <datalist id="ill">
                  <option value="Illuminated">
                  <option value="Non-Illuminated">
               </datalist>

              </div>
          </div>



            <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-portrait"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" list="orientation" type="text" name="orientation" placeholder=" Orientation" autocomplete="off">
                <datalist id="orientation">
                  <option value="Vertical">
                  <option value="Horizontal">
                  <option value="Both">
               </datalist>

              </div>
          </div>



            <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-traffic-light"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" list="traffic" type="text" name="traffic" placeholder=" Traffic" autocomplete="off">

                <datalist id="traffic">
                  <option value="Morning">
                  <option value="Evening">
                  <option value="Both">
               </datalist>

              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-comments"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="text" name="comments" placeholder="Comments" >
              </div>
          </div>




             <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar-alt"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="date" name="avail" placeholder="Date" >
              </div>
          </div>

             </div>
                      
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
                      
                      <button style="width:50%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit" id="load" 
                      data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Submit</button>

                      <button type="button" style="width:50%" class="w3-button w3-purple w3-round-xxlarge" data-dismiss="modal">Close</button>
                      </div>
            </form> 

          </div>
        </div>
    </div>
      



      <div id="transadd" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form method='post' action="../transaction/add.php">
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">Add Information</h4> 
            </div>
            
            <!-- Modal body -->
             <div class="modal-body">
              
              <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-user-circle"></i></div>
                    <div class="w3-rest">
                      <input  class="w3-input w3-border w3-round-xxlarge" type="text" name="sr" placeholder="SR NO.">
                    </div>
                </div>

              <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-user"></i></div>
                 <div class="w3-rest">
                <input type="text" class=" w3-input w3-border w3-round-xxlarge" list="l_name" name="l_name" placeholder="select labour" style="margin-bottom:15px" autocomplete="off" required>
                <datalist id="l_name">
                  <?php
                   
                    $query = "select l_name from labour order by l_name";
                    $results = $conn->query($query);

                    while ($rows= $results->fetch_assoc()){ 
                 ?>
                  <option value="<?php echo $rows['l_name'];?>">
                   <?php
                   } 
                  ?>
              </datalist>
             </div>
           </div>

     
               <div class="w3-row w3-section">
                 <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-building"></i></div>
                  <div class="w3-rest">
                     <input type="text" class=" w3-input w3-border w3-round-xxlarge" id="siteName" list="site_name" name="site_name" placeholder="Select Site" style="margin-bottom: 15px" autocomplete="off" required>
                    <datalist id="site_name">
                      <?php
                     
                        $query = "select site_name from site order by site_name";
                        $results = $conn->query($query);

                        
                        while ($rows= $results->fetch_assoc()){ 
                           
                      ?>
                      <option value="<?php 
                       
                      echo $rows['site_name'];?>">
                     <?php
                       } 
                      ?>
                    </datalist>
                  </div>
               </div>

                 
               

                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-university"></i></div>
                    <div class="w3-rest">
                      <select class=" w3-input w3-border w3-round-xxlarge" placeholder="Operation" id="operation" name='operation'>
                        <option value="Mount">Mount</option>
                        <option value="Demount">Demount</option>
                      </select>
                    </div>
                </div>


                <div class="w3-row w3-section a">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-map-marker-alt"></i></div>
                    <div class="w3-rest">
                    <input class="new_display w3-input w3-border w3-round-xxlarge" list="c_name" name="c_name" placeholder="Select Client" style="margin-bottom: 15px" required>
                    <datalist id="c_name">
                      <?php
                       
                        $query = "select c_id,c_name from client order by c_id";

                        $results = $conn->query($query);

                        while ($rows= $results->fetch_assoc()){ 
                      ?>
                     <option value="<?php echo $rows['c_name'];?>">
                     <?php
                       } 
                      ?>
                    </datalist>


                    </div>
                </div>


                <div class="w3-row w3-section a">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-phone"></i></div>
                    <div class="w3-rest">
                       <input class="new_display  w3-input w3-border w3-round-xxlarge" list="caption" name="caption" placeholder="Select Display" style="margin-bottom: 15px" required>
                      <datalist id="caption">
                        
                        <?php
                       
                          $query = "select caption from display order by display_id";

                          $results = $conn->query($query);

                          while ($rows= $results->fetch_assoc()){ 
                        ?>
                       <option value="<?php echo $rows['caption'];?>">
                       <?php
                         } 
                        ?>
                      </datalist>
                    </div>
                </div>

                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge far fas fa-mobile"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="date" name="t_date" placeholder="Transaction Date">
                    </div>
                </div>


                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-user-circle"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="date" name="booked_till" placeholder="Booked Till">
                    </div>
                </div>

                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-alt"></i></div>
                    <div class="w3-rest">
                      <select class=" w3-input w3-border w3-round-xxlarge" placeholder="Other Work" name='other_work'>
                        <option value="">Other Work</option>
                        <option value="b">b</option>
                      </select>
                    </div>
                </div>


             </div>
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
                      
                      <button style="width:50%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit" id="load" 
                      data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Submit</button>

                      <button type="button" style="width:50%" class="w3-button w3-purple w3-round-xxlarge" data-dismiss="modal">Close</button>
                      </div>
            </form>  
          </div>
        </div>
      </div>

     <script>

    $('#requestl').click(function(){ 
$.ajax({
 type: "POST",
 data:{types:'Labour'},
  url: '../include/request.php',
 success: function(data){
     alert(data);
  }
});




//current_display
//}
});
$('#requestd').click(function(){ 
$.ajax({
 type: "POST",
 data:{types:'Display'},
  url: '../include/request.php',
 success: function(data){
     alert(data);
  }
});

//}
});
$('#requestt').click(function(){ 
$.ajax({
 type: "POST",
 data:{types:'Transaction'},
  url: '../include/request.php',
 success: function(data){
     alert(data);
  }
});

//}
});
$('#requests').click(function(){ 
$.ajax({
 type: "POST",
 data:{types:'Site'},
  url: '../include/request.php',
 success: function(data){
     alert(data);
  }
});

//}
});

$(document).ready(function() {
      $().ready(function() {
        $('#l').attr('disabled', true); 
        $('#s').attr('disabled', true); 
        $('#d').attr('disabled', true);  
        $('#t').attr('disabled', true); 
        $.ajax({
  url: '../include/check.php',
  dataType: "html",   
 success: function(data){
   if(data.access==1&&data.name=='Labour'){
   $('#l').attr('disabled', false);
   }else{
   $('#l').attr('disabled', true);
  }
},
    dataType: 'json'
});
$.ajax({
  url: '../include/check.php',
  dataType: "html",   
 success: function(data){
   if(data.access==1&&data.name=='Site'){
   $('#s').attr('disabled', false);
   }else{
   $('#s').attr('disabled', true);
  }
},
    dataType: 'json'
});

$.ajax({
  url: '../include/check.php',
  dataType: "html",   
 success: function(data){
   if(data.access==1&&data.name=='Display'){
   $('#d').attr('disabled', false);
   }else{
   $('#d').attr('disabled', true);
  }
},
    dataType: 'json'
});
$.ajax({
  url: '../include/check.php',
  dataType: "html",   
 success: function(data){
   if(data.access==1&&data.name=='Transaction'){
   $('#t').attr('disabled', false);
   }else{
   $('#t').attr('disabled', true);
  }
},
    dataType: 'json'
});
      });
    });




$(document).ready(function(){
    $("#operation").change(function(){
       var fixed=$("#operation").val();
       if(fixed=="Demount"){
        $(".a").hide();
       }
       else{
        $(".a").show();
       }
    }).change();
});

$(document).ready(function() {
  $("#siteName").change(function(){
   var site = $('#siteName').val()
   event.preventDefault();

  $.ajax({ 
  type:"post",
   data:{site:site},  
  url: '../include/tran.php',
 success: function(data){
  document.getElementById('current_display').value=data.dis_name;  
},
    dataType: 'json'
});








  });

});


</script>
</body>

</html>
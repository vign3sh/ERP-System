
<?php 
include('../include/connection.php');
session_start(); 

if (array_key_exists("id", $_SESSION) AND $_SESSION['id']){


      
  $query = "select * from login where username='".mysqli_real_escape_string($conn, $_SESSION['name'])."'";
                       
  $results = $conn->query($query);
                       
  while ($rows= $results->fetch_assoc()){ 
          $user_type=$rows['user_type'];

          if($user_type=='Admin'|| $user_type=='Billing'){
            
            
          }
         else if($user_type=='Operation'){
          header('Location:operations.php');
          }
          else if($user_type=='Marketing'){
           header('Location:marketing.php');
            
          }

      }
}

else{
    
    header('Location:../index.php');
}
include('../include/connection.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <title>
    Billing
  </title>
  <style>p{

font-size:12px;
}</style>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->

</head>

<body class="white-content">
  <div class="wrapper">
    <div class="sidebar" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
    <div class="sidebar-wrapper"  >
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
          <li >
            <a href="./operations.php">
              <i class="tim-icons icon-single-copy-04"></i>
              <p>Operations</p>
            </a>
          </li>
          <li class="active">
              <a href="./profile.php">
                <i class="tim-icons icon-settings-gear-63"></i>
                <p>Billing</p>
              </a>
            </li>
          <li >

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
            
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">User Profile</a>
          </div>
         
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
             
         
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
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
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h3 class="title text-center" >Billing</h3>
              </div>
              <div style="" class="card-body">
                <center>
                <button type="submit" class="btn btn-fill btn-primary" data-toggle="modal" data-target="#gen">Generate Bill</button>
                <button type="submit"  style="margin-left: 20px" class="btn btn-fill btn-primary" data-toggle="modal" data-target="#view">View Bill Status</button>
                <button type="submit" id="update" style="margin-left: 20px" class="btn btn-fill btn-primary" data-toggle="modal" data-target="#mod">Update Bill Status</button>
                <button type="submit"  style="margin-left: 20px" class="btn btn-fill btn-primary" data-toggle="modal" data-target="#upload">Upload Bill </button>
                </center>
              </div>
              <div class="card-footer">
                
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






     <div id="gen" class="modal fade" >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form method='post' action="billing/preview.php">
     
            <!-- Modal Header -->
        <div class="modal-header w3-container w3-blue w3-center">
         <h4 class="modal-title">Select Options</h4> 
        </div>
            
            <!-- Modal body -->
        <div class="modal-body">
          
          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
              <input  class="w3-input w3-border w3-round-xxlarge" name="comp_name" placeholder="Service Company Name" required>
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
              <input  class="w3-input w3-border w3-round-xxlarge" name="comp_add" placeholder="Company Address" required>
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
              <input  class="w3-input w3-border w3-round-xxlarge" name="comp_land" placeholder="Company Landmark" required>
              </div>
          </div>


            <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
              <input  class="w3-input w3-border w3-round-xxlarge" name="gst" placeholder="GST/UIN" required>
              </div>
          </div>



          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" name="invoice" placeholder="Invoice Number"  required>
              </div>
          </div>
          
          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
              <input  class="w3-input w3-border w3-round-xxlarge" type="date" name="date" required>
              </div>
          </div>
     


          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" name="delivery_note" placeholder="Delivery Note">
              </div>
          </div>



           <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" name="modes" placeholder="Modes/Terms of Payment">
              </div>
          </div>        
          

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" name="supply" placeholder="Supply Ref No.">
              </div>
          </div>   

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" name="other_ref" placeholder="Other Refrences">
              </div>
          </div>   

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" name="order_no" placeholder="Service Order no.">
              </div>
          </div>   

        
         

             

     
        </div>                


              <div class="modal-footer">
                      
                      <button style="width:50%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit" id="preview" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Preview</button>

                      <button type="button" style="width:50%" class="w3-button w3-purple w3-round-xxlarge" data-dismiss="modal">Close</button>
              </div>
            </form> 

          </div>
        </div>
    </div>





    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         
        
            <div class="w3-card-4">

  <form method='post' action="billing/display.php">
  <header class="w3-container w3-blue w3-center">
  <h1>View Bill</h1>
</header>

<div class="w3-container w3-center  w3-card-4 w3-light-grey">
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-card"></i></div>
    <div class="w3-rest">
    <input class="w3-input w3-border w3-round-xxlarge" list="sitee" name="invoice" placeholder="select invoice" style="margin-bottom:15px" autocomplete="off">
    <datalist id="sitee">
      <option value="Pending">
      <option value="Paid">
      <option value="Partially paid">
      <option value="All">
      <?php
        include("../include/connection.php");
        $query = "select invoice from bill";
        $results = $conn->query($query);

        while ($rows= $results->fetch_assoc()){ 
      ?>
      <option value="<?php echo $rows['invoice'];?>">
     <?php
       } 
      ?>
    </datalist>
  
      </div>
      </div>

</div>

<footer class="w3-container w3-center w3-card-4 w3-light-grey">
  <br>
<input style="width:60%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit"  value="Submit">
<br>
<br>
</footer>
  

</form>


          </div>
          
        </div>
      </div>
    </div>





 <div class="modal fade" id="mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         
        
            <div class="w3-card-4">

  <form method='post' action="billing/display_mod.php">
  <header class="w3-container w3-blue w3-center">
  <h1>Modify Bill</h1>
</header>

<div class="w3-container w3-center  w3-card-4 w3-light-grey">
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-card"></i></div>
    <div class="w3-rest">
    <input class="w3-input w3-border w3-round-xxlarge" list="inv" name="invoice" placeholder="select invoice" style="margin-bottom:15px" autocomplete="off">
    <datalist id="inv">
      <?php
        include("../include/connection.php");
        $query = "select invoice from bill";
        $results = $conn->query($query);

        while ($rows= $results->fetch_assoc()){ 
      ?>
      <option value="<?php echo $rows['invoice'];?>">
     <?php
       } 
      ?>
    </datalist>
  
      </div>
      </div>

</div>

<footer class="w3-container w3-center w3-card-4 w3-light-grey">
  <br>
<input style="width:60%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit"  value="Submit">
<br>
<br>
</footer>
  

</form>


          </div>
          
        </div>
      </div>
    </div>





<div id="upload" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          <form action="billing/upload.php" method="post" enctype="multipart/form-data" >
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">Upload Bill PDF</h4> 
            </div>
            
            <!-- Modal body -->
             <div class="modal-body">

               <div class="w3-row w3-section">
                 <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-building"></i></div>
                  <div class="w3-rest">
                     <input type="text" class=" w3-input w3-border w3-round-xxlarge" list="sit_name" name="invoice" placeholder="Select Invoice No." style="margin-bottom: 15px" autocomplete="off" required>
                    <datalist id="sit_name">
                      <option value="Latest" default>
                      <?php
                     
                        $query = "select invoice from bill";
                        $results = $conn->query($query);
                        
                        while ($rows= $results->fetch_assoc()){ 
                      ?>
                      <option value="<?php echo $rows['invoice'];?>">
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
                  <input class="w3-input w3-border" type="file"name="fileToUpload" id="fileToUpload">
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
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
 
  <script>
    $(document).ready(function() {
       
      var user_type= "<?php echo $user_type; ?>";
    
      if(user_type=="Admin"){
        $('#update').prop('disabled', false);
      }
      else{
        $('#update').prop('disabled', true);
      }

    });
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
  </script>
</body>

</html>
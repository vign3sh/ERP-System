<!DOCTYPE html>
<html lang="en">
<?php   
require_once('../include/marketingaccess.php');   


?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   Marketing
  </title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-print-1.5.4/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>
 
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-print-1.5.4/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />


<style>p{

font-size:12px;
}
a, a:visited,a:active {
  color:#FF00FF;
}



</style>
</head>

<body class="white-content">
  <div class="wrapper">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
    <div class="sidebar-wrapper" >
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
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
          <li class="active">
            <a href="./marketing.php">
              <i class="tim-icons icon-coins"></i>
              <p>Marketing</p>
            </a>
          </li>
          <li>
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


      <div id="options" class="modal fade" >
       <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">Select Options</h4> 
            </div>
            
            <!-- Modal body -->
        <div class="modal-body">

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-dollar-sign"></i></div>
            <form method='post' action="" >  
            <div class="w3-rest">

                <input class="w3-input w3-border w3-round-xxlarge" id="sect" list="rate" type="text" name="rate" placeholder="Rate" autocomplete="off" required>

                <datalist id="rate">
                  <option value="R1">
                  <option value="R2">
                  <option value="R3">
                  <option value="R4">
               </datalist>

              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="phone" name="noofdays" placeholder="No. of Days" autocomplete="off" required>
              </div>
          </div>
          
          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
              <input  class="w3-input w3-border w3-round-xxlarge" type="date" name="date" required>
              </div>
          </div>
         
          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge far fa-eye-slash"></i></div>
              <div class="w3-rest">
              <input class="w3-input w3-border w3-round-xxlarge d-inline" id="fixed" list="Export" type="text" name="fix" placeholder="Packaged/Fixed" autocomplete="off">
               
               <datalist id="Export">
                 <option value="Package" >
                 <option value="Fixed">
              </datalist>
                

              </div>
          </div>



           <div class="w3-row w3-section" id="best">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-calendar-day"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" type="phone"  name="best" placeholder="Best Offer">
              </div>
          </div>
        
          
          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-shopping-bag"></i></div>
              <div class="w3-rest"> 
             <div class="form-group">
             <div class="w3-row-padding">
  <div class="w3-half">
  <input class="w3-input w3-border w3-round-xxlarge" id="sect" list="price" type="text" name="price" placeholder="Price Show/Hide" autocomplete="off">

<datalist id="price">
  <option value="Show">
  <option value="Hide">
</datalist>

  </div>
  <div class="w3-half">
               <input type="button" id="save" name="Export" class="d-inline  btn btn-outline-success" value="Save"/>
               </div>   
</div>
</div>
              
              </div>
          </div>


                  
      
      <div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-card"></i></div>
    <div class="w3-rest">
    <input class="w3-input w3-border w3-round-xxlarge" id="sect" list="email" id="email" name="email" placeholder="Enter Email" style="margin-bottom:15px" autocomplete="off" required>
   <datalist id="email">
      <?php
       

        $query = "select email_id from client order by c_name";
        $results = $conn->query($query);
        
        while ($rows= $results->fetch_assoc()){ 
      ?>
      <option value="<?php echo $rows['email_id'];?>">
     <?php
       } 
      ?>
    </datalist>
  
      </div>
      </div>
      </div>                  <div class="modal-footer">
                      
                      <button style="width:50%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit" id="send_mail"data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Submit</button>

                      <button type="button" style="width:50%" class="w3-button w3-purple w3-round-xxlarge" data-dismiss="modal">Close</button>
                      </div>
            </form> 

          </div>
        </div>
    </div>



      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header card-header-info">
                <h4 class="card-title text-center" style="color:white;"><b> IMMEDIATE AVAILABLE SITES AS ON &nbsp;<label id="me"></label></b></h4>           
  
              </div>
              <div class="card-body">
                <div class="table-responsive">
 
   
   <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr class="table-info" style="color:black">
                 <th></th>
                <th>Area</th>
                <th>Site Code</th>
                <th>Site Name/Location</th>
                <th>Traffic</th>
                <th>Type</th>
                <th>W</th>
                <th>H</th>
                <th>Availibility</th>
            </tr>
        </thead>
       
        <tfoot>
            <tr class="table-info" style="color:white">
            <th></th>
                <th>Area</th>
                <th>Site Code</th>
                <th>Site Name/Location</th>
                <th>Traffic</th>
                <th>Type</th>
                <th>W</th>
                <th>H</th>
                <th>Availibility</th>
            </tr>
        </tfoot>

    </table>

   <button id="btnSelectedRows" style="margin: 0px;" class="btn btn-outline-success"  data-toggle="modal" data-target="#options">Select</button>
   
  

     <!--window.location.href='index.php?logout=1'-->
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
  
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
    <!--   Core JS Files   -->
   
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
    $(document).ready(function() {
    var selected = [];
    var table = $("#example").DataTable({
     
        "ajax": '../include/fetch.php',
       
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
          style: 'multi',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
   });
   
   
     
   // Handle form submission event 
   
$('#btnSelectedRows').on('click', function() {

 
  var list = [];
      var tblData = table.rows('.selected').data();
  var tmpData;
  $.each(tblData, function(i, val) {
    tmpData = tblData[i][2];
    list.push(tmpData);
   
  });
 
  Cookies.set('fcookie',JSON.stringify(list)); 

  $.ajax({
    type: "POST",
    url: '../attachments/ppt.php',
    success: function(data){
        alert(data);
    }
});
 
               

      // FOR DEMONSTRATION ONLY
      // The code below is not needed in production
      
      // Output form data to a console     
      $('#example-console-rows').text(rows_selected.join(","));
      
      // Output form data to a console     
      $('#example-console-form').text($(form).serialize());
       
      // Remove added elements
      $('input[name="id\[\]"]', form).remove();
       
      // Prevent actual form submission
      e.preventDefault();
    });   
} );


$(document).on('click','#save',function(e) {
  var rate = $('input[name="rate"]').val();
  var nofdays = $('input[name="noofdays"]').val();
  var fix=$('input[name="fix"]').val();
  var best = $('input[name="best"]').val();
  var price= $('input[name="price"]').val();
  var date= $('input[name="date"]').val();

$.ajax({
  type: "POST",
  data:{rate: rate, noofdays: nofdays,best:best,fix:fix,price:price,date:date},
  url: '../attachments/excel.php',
  success: function(data){
      alert(data);
  }
});

  
});


/*$(document).ready(function(){
    $("#fixed").change(function(){
       var fixed=$("#fixed").val();
       if(fixed=="Fixed"){
        $("#best").hide();
       }
       else{
        $("#best").show();
       }
    }).change();
});*/



$(function () {

$('form').on('submit', function (e) {

  e.preventDefault();
  $.ajax({
    type: 'post',
    url: '../PHPMailer/sendmail.php',
    data: $('form').serialize(),
    success: function () {
      alert('Mail Sent');
    }
  });

});

}); 


 </script>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
</body>

</html>
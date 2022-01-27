<?php   

//require_once('../include/indexaccess.php');  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />

  
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <style>p{

font-size:12px;
}</style>
</head>

<body class="white-content">
  <div class="wrapper ">
    <div class="sidebar" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper" >
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            
          </a>
           <a href="https://www.indiacreation.in" class="simple-text logo-normal">
            Creation
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
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
           <img  src="../assets/img/Logo.jpg" alt="Profile Photo"  width="100" height="50">
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
                 
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="../include/logout.php" class="nav-item dropdown-item">Log out</a>
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
        
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="title card-header-warning">Total Clients <i class="fa fa-users"></i></h5>
                <?php
                         
                        $query = "select count(*) as total from client";
                        $results = $conn->query($query);
                        
                        while ($rows= $results->fetch_assoc()){ 
                      ?>
                    
                    
                <h3 class="card-title"><i class="tim-icons icon-single-02 text-primary"></i> <?php echo $rows['total'];?></h3>
                <?php
                       } 
                      ?>
              </div>
              
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="title card-header-success">Total Sites <i class="fa fa-building"></i></h5>
                <?php
                         
                        $query = "select count(*) as total from site";
                        $results = $conn->query($query);
                        
                        while ($rows= $results->fetch_assoc()){ 
                      ?>
                <h3 class="card-title"><i class="tim-icons icon-bank text-info"></i> <?php echo $rows['total'];?></h3>
                <?php
                       } 
                      ?>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="title card-header-rose">Total Labours <i class="fa fa-user"></i></h5>
                <?php
                       
                        $query = "select count(*) as total from labour";
                        $results = $conn->query($query);
                        
                        while ($rows= $results->fetch_assoc()){ 
                      ?>
                <h3 class="card-title"><i class="tim-icons icon-user-run text-success"></i> <?php echo $rows['total'];?></h3>
                <?php
                       } 
                      ?>
              </div>
             
            </div>
          </div>
        </div>

        <div class="card">
              <div class="card-body">
                <div class="places-buttons">
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <h4 class="card-title card-header-rose" style="color:white">
                        Admin Panel <i class="fa fa-user-secret"></i>
                       
                      </h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-success btn-block" data-toggle="modal" data-target="#useradd">Add  <i class="fa fa-user-plus"></i></button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-info btn-block" data-toggle="modal" data-target="#userremove">Remove <i class="fa fa-users"></i></button>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>



        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
              <div class="card-header card-header-info">
                <h5 class="title d-inline">Requests For Modify Access</h5>
               
                   <i style="color:white;float:right" id="change"  class="tim-icons d-inline icon-pencil"></i>
                        
                   <i style="color:white;float:right ;padding-right:10px;" id="remove"  class=" d-inline fa fa-trash"></i>
                        
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                    <thead class=" text-primary">
                      <tr>
                        <th></th>
                        <th>Description</th>
                        <th>Name</th>
                        <th>Request</th>
                        <th>Contact</th>
                        <th>Status</th>
                      </tr>
                      </thead>
                      <?php
                    $query = "select *  from labour_request";
                        $results = $conn->query($query);
                        
                        while ($rows= $results->fetch_assoc()){ 
                      ?>
               
                      <tr>
                        <td >
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox"  id="check_id">
                              <span class="form-check-sign">
                                <span class="check"> </span>
                              </span>
                            </label>
                          </div>
                        </td>
                          <td >
                          <p class="title">This Person Require Modify Access</p>
                        </td>
                          <td >
                        <?php echo $rows['l_name'];?>
                        </td>
                          <td>
                          <?php echo $rows['company_name'];?>
                        </td>
                        <td>
                          <?php echo $rows['office_no'];?>
                        </p>
                        </td>
                        <td>
                          <?php $checkme= $rows['access'];
                          if($checkme==1){
                            echo "Granted";
                          }
                          else{
                            echo "Pending";
                          }


                          ?>


                        </td>
                      </tr>
                     
                <?php
                       } 
                      ?>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
              <div class="card card-tasks">
              <div class="card-header card-header-primary">
                <h4 class="title d-inline ">Clients</h4>
                <i style="color:white;float:right" class="tim-icons d-inline  icon-single-02"></i>
                 
              </div>
              <br>
              <div class="card-body">
                  <div class="table-full-width table-responsive">
                  <table class="table" id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Name
                        </th>
                        <th>
                         Address
                        </th>
                        <th>
                          Mobile
                        </th>
                        <th class="text-center">
                         Person
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                       
                       $query = "select * from client";
                       $results = $conn->query($query);
                       
                       while ($rows= $results->fetch_assoc()){ 
                     ?>
                      <tr>
                        <td>
                        <?php echo $rows['c_name'];?>
                        </td>
                        <td>
                        <?php echo $rows['address'];?>
                        </td>
                        <td>
                        <?php echo $rows['mobile'];?>
                        </td>
                        <td class="text-center">
                        <?php echo $rows['contact_person'];?>
                        </td>
                      </tr>
                    
                <?php
                       } 
                      ?>
                    </tbody>
                  </table>
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
                Copyright
              </a>
            </li>
           
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> Creation Publicity Pvt Ltd
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

   








 <div id="useradd" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form method='post' action="">
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">Add Information</h4> 
            </div>
            
            <!-- Modal body -->
             <div class="modal-body">
              
              <div class="w3-row w3-section">
               <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-user"></i></div>
                 <div class="w3-rest">
                  <input type="text" class=" w3-input w3-border w3-round-xxlarge" placeholder="Name" name="name" required>
                 </div>
              </div>

     
               <div class="w3-row w3-section">
                 <div class="w3-col" style="width:50px"><i class="w3-xxlarge  fas fa-building"></i></div>
                  <div class="w3-rest">
                     <input type="text" class=" w3-input w3-border w3-round-xxlarge" placeholder="Username"  name="username" required >
                  </div>
               </div>

                 
                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fas fa-location-arrow"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="password" placeholder="Password"  name="password" required >
                    </div>
                </div>



                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge far fas fa-mobile"></i></div>
                    <div class="w3-rest">
                      <input  class=" w3-input w3-border w3-round-xxlarge" type="number" placeholder="Contact number" name="contact" required >
                    </div>
                </div>

                         
          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge   fas fa-user-cog"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border w3-round-xxlarge" id="sect" list="section" type="text" name="usertype" placeholder="User Type" autocomplete="off" required>

                <datalist id="section">
                  <option value="Admin">
                  <option value="Marketing">
                  <option value="Operation">
                  <option value="Billing">
               </datalist>

              </div>
          </div>
          </div>

                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
                      
                      <button style="width:50%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit"  id="uadd" 
                      data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Submit</button>

                      <button type="button" style="width:50%" class="w3-button w3-purple w3-round-xxlarge" data-dismiss="modal">Close</button>
                      </div>
            </form>  
          </div>
        </div>
      </div>



      
 <div id="userremove" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form method='post' action="">
            <!-- Modal Header -->
            <div class="modal-header w3-container w3-blue w3-center">
              <h4 class="modal-title ">User Details</h4> 
            </div>
            
            <!-- Modal body -->
             <div class="modal-body">
              
          <div class="">
            <div class="card card-tasks">
              <div class="card-header card-header-info">
                <h5 class="title d-inline">Remove User</h5>
                        
                   <i style="color:white;float:right ;padding-right:10px;" id="remove_user"  class=" d-inline fa fa-trash"></i>
                        
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                    <thead class=" text-primary">
                      <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Usertype</th>
                      </tr>
                      </thead>
                      <?php
                    $query = "select *  from login";
                        $results = $conn->query($query);
                        
                        while ($rows= $results->fetch_assoc()){ 
                      ?>
               
                      <tr class="">
                        <td >
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox"  id="del_id">
                              <span class="form-check-sign">
                                <span class="check"> </span>
                              </span>
                            </label>
                          </div>
                        </td>
                          <td >
                        <?php echo $rows['name'];?>
                        </td>
                          <td>
                          <?php echo $rows['username'];?>
                        </td>
                        <td>
                          <?php echo $rows['user_type'];?>
                        </p>
                        </td>
                        
                      </tr>
                     
                <?php
                       } 
                      ?>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>           </div>

                      
                      <!-- Modal footer -->
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
 
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
 
  <script>
    var perfEntries = performance.getEntriesByType("navigation");

if (perfEntries[0].type === "back_forward") {
    location.reload(true);
}

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

      document.getElementById('auth').onclick = function(e){
     
     window.location.href='../PHPMailer/get_oauth_token.php'
    e.preventDefault();
      };
    });
 
 


    $('#change').click(function(){ 
      var result = $("tr:has(:checked)")
      var rate="";
    result.each(function(){
      //var td=(this).find("span");
        var tds=$(this).children().slice(1);

        rate=tds.eq(1).text().trim();
        //alert(td);     
    })

$.ajax({
 type: "POST",
  data:{l_name: rate},
  url: '../include/access.php',
 success: function(data){
     alert(data);
      location.reload();
  }
});

//}
});
    
$('#remove').click(function(){ 
      var result = $("tr:has(:checked)")
      var rate="";
    result.each(function(){
      //var td=(this).find("span");
        var tds=$(this).children().slice(1);

        rate=tds.eq(1).text().trim();
        //alert(td);     
    })

$.ajax({
 type: "POST",
  data:{l_name: rate},
  url: '../include/remove.php',
 success: function(data){
  alert(data);
  location.reload();
  }
});

//}
});




$('#remove_user').click(function(){ 
      var result = $("tr:has(:checked)")
      var rate="";
    result.each(function(){
      //var td=(this).find("span");
        var tds=$(this).children().slice(1);

        rate=tds.eq(1).text().trim();
        alert(rate);     
    })

$.ajax({
 type: "POST",
  data:{name: rate},
  url: '../include/userremove.php',
 success: function(data){
  }
});

//}
});


$(function () {

$(document).on('click','#uadd',function(e) {

  var name = $('input[name="name"]').val();
  var username = $('input[name="username"]').val();
  var password = $('input[name="password"]').val();
  var contact = $('input[name="contact"]').val();
  var usertype = $('input[name="usertype"]').val();

  e.preventDefault();
  $.ajax({
    type: 'post',
    data:{name:name, username: username,password:password,contact:contact,usertype:usertype},
    url: '../include/useradd.php',
    success: function () {
      
    }
  });

});

}); 


/*$(document).ready(function() {
      $().ready(function() {

$.ajax({
  url: '../include/addremove.php',
  dataType: "html",   
 success: function(data){
  alert(data["l_name"][0])
for(var i=0;i<data["l_name"].length;i++)
    {
        var tr="<tr>";
        var td4="<td></td>";
        var td5="<td>This Person Require Modify Access</td>"
        var td1="<td>"+data["l_name"][i]+"</td>";
        var td2="<td>"+data["company_name"][i]+"</td>";
        var td3="<td>"+data["office_no"][i]+"</td></tr>";

       $("#req").append(tr+td4+td5+td1+td2+td3); 

    }   
 //document.getElementById('checkbox').innerHTML ="<div class='form-check'><label class='form-check-label'><input class='form-check-input' type='checkbox'  id='check_id'><span class="form-check-sign"><span class='check'> </ span></ span></ label></div>";  

 // document.getElementById('c_name').innerHTML =data.company_name[i];  
 // document.getElementById('office_no').innerHTML =data.office_no[i];  
  

},
    dataType: 'json'
});
});
});*/
    
  </script>
 
</body>

</html>
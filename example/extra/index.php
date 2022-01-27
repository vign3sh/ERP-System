<?php
require_once('include/auth.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   
    <link rel="stylesheet" type="text/css" media="screen" href="include/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

    <title>Login</title>
  


  </head>
  <body>
  <div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-start py-5">
      
      
     
        <div class="container">
          <div class="row">
          
            <div class="col-md-9 col-lg-8 mx-auto ">
            <img src="attachments/PHPPresentation/tests/resources/images/Creationlogo.jpg" class="img-fluid  login-heading mb-4 text-center">
            <br>
            <br>
              <form method="post" action="include/login.php" autocomplete="off">
               
                <div class="form-label-group">
                  <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus >
                  <label for="inputEmail">Username</label>
                </div>
            
                <br>
          
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required autofocus>
                  <label for="inputPassword">Password</label>
                </div>
                
          
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
               
                        
                  
                
                <input  class="btn btn-lg btn-danger btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" Value="Sign in">
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="assets/js/main.js"></script>
  </body>
</html>
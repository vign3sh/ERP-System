<?php
require_once('include/auth.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-grey.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   
       <script src="./include/main.js"></script>    
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="./include/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    

    <title>Login</title>
    
  <style>
    
    #snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color:tomato;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    top: 30px;
    font-size: 17px;
  }
  
  #snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
  }
  
  @-webkit-keyframes fadein {
    from {top: 0; opacity: 0;} 
    to {top: 30px; opacity: 1;}
  }
  
  @keyframes fadein {
    from {top: 0; opacity: 0;}
    to {top: 30px; opacity: 1;}
  }
  
  @-webkit-keyframes fadeout {
    from {top: 30px; opacity: 1;} 
    to {top: 0; opacity: 0;}
  }
  
  @keyframes fadeout {
    from {top: 30px; opacity: 1;}
    to {top: 0; opacity: 0;}
  }
 
    
    .bg-image {
background-image: url('../assets/img/bh.jpg');
background-position: center;
background-repeat: no-repeat;
background-size: cover;
min-height: 100%;
  }</style>
  
  </head>
  <body>
  <div class="container-fluid">
      <div id="snackbar"></div>
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-start py-5">
      
      
     
    
          <div class="row">
          
            <div class="col-md-9 col-lg-8 mx-auto ">
            <img src="attachments/PHPPresentation/tests/resources/images/Creationlogo.jpg" class="img-fluid  login-heading mb-4 text-center">
            <br>
            <br>
              <form method="post" id="loginform">
              
                <div class="form-label-group">
                  <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus style="margin-top:6px">
                  <label for="inputEmail">Username</label>
                </div>
            
                <br>
          
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required autofocus style="margin-top:6px">
                  <label for="inputPassword">Password</label>
                </div>
                
          
                <div class="custom-control custom-checkbox mb-3" style="margin-top:20px">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
               
                        
                
                <button  class="btn btn-lg btn-danger btn-block btn-login text-uppercase font-weight-bold mb-2" style="margin-top:30px" id='login' >Sign in</button>
                <br>
                <br>
              </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


  </body>
</html>

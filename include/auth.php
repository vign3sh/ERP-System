<?php   
session_start();
if (array_key_exists("logout", $_GET)) {
        
   // unset($_SESSION['id']);
   // unset($_SESSION['error']);
 //   unset($_SESSION['name']);
   // unset($_SESSION['user_type']);
}
else if(array_key_exists("id", $_SESSION) AND $_SESSION['id']){
    $error="";
    include('connection.php');
  $query = "select * from login where username='".mysqli_real_escape_string($conn, $_SESSION['name'])."'";
                       
  $results = $conn->query($query);
                       
  if ($rows= $results->fetch_assoc()){ 
          $user_type=$rows['user_type'];

          if($user_type=='Admin'){
            
            header('Location:example/index.php');
          }
         else if($user_type=='Operation'){
          header('Location:example/operations.php');
          }
          else if($user_type=='Marketing'){
           header('Location:example/marketing.php');
            
          }

      }
}

else{
   // $error= "Please Sign In";
    // /header('Location:./index.php');
}


?>
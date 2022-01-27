<?php
include('connection.php');
session_start(); 
if (array_key_exists("id", $_SESSION) AND $_SESSION['id']){


$query = "select * from login where username='".mysqli_real_escape_string($conn,          $_SESSION['name'])."'";
                      
  $results = $conn->query($query);
                       
  while ($rows= $results->fetch_assoc()){ 
          $user_type=$rows['user_type'];
          
          if($user_type=='Admin'){
            
          }
         else if($user_type=='Operation'){  
          header('Location:./example/operations.php');
          }
          else if($user_type=='Billing'){
          header('Location:../example/billing.php');
          }
          else if($user_type=='Marketing'){
           header('Location:../example/marketing.php');
            
          }

      }
}

else{
   
    header('Location:../index.php');
}


?>
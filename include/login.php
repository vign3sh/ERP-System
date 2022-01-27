<?php
session_start(); 

  include('connection.php');
   
    $sql = "SELECT id,password,user_type,username from login where username='".mysqli_real_escape_string($conn, $_POST['username'])."'AND password='".mysqli_real_escape_string($conn, $_POST['password'])."'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row=$result->fetch_assoc();
    
       if($row['password']==$_POST['password'])
       {
    
         
         $_SESSION['id']=$row['id'];
         $_SESSION['name']=$row['username'];
         $_SESSION['user_type']=$row['user_type'];
         $error=$row['user_type'];
       /*  if($row['user_type']=='Admin'){
        echo header('Location:../example/index.php');
         }

         else if($row['user_type']=='Operation'){
          echo header('Location:../example/operations.php');
           }
           else if($row['user_type']=='Marketing'){
            echo header('Location:../example/marketing.php');
             }
             else if($row['user_type']=='Billing'){
            echo header('Location:../example/billing.php');
             }
       }
       else{
        echo 'invalid';   
        $_SESSION["error"] ='Please enter correct username and password';
        header('Location:../index.php');
       }
    } 
    
    else {
        echo 'invalid';   
      $_SESSION["error"] ='Please enter correct username and password';
        header('Location:../index.php');
    }*/
     $error=$row['user_type'];
        

       }
       else{
        $_SESSION["error"] ='invalid Credentials';
        $error ='invalid';
      
       // header('Location:../index.php');
       }
    } 
    
    else {
      $_SESSION["error"] ='invalid Credentials';
      $error ='invalid';
   
       // header('Location:../index.php');
    }
  echo $error;
  

  
    
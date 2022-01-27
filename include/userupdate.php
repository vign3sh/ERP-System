<?php
session_start(); 

include('connection.php');
        
date_default_timezone_set("Asia/Calcutta");
$date= date("Y-m-d") ;
$first=$_POST['First'];  
$last=$_POST['Last'];  
$address=$_POST['Address'];  
$city=$_POST['City'];  
$country=$_POST['Country'];  
$postal=$_POST['Postal'];  
$email=$_POST['Email'];  
$user=$_POST['Username'];  

$sql = "UPDATE user_details set first ='".$first."',  last='".$last."', Address='".$address."', City ='".$city."', Country='".$country."', postal='".$postal."', email='".$email."' WHERE username='".$user."'";



$result = $conn->query($sql);
$error;
if ($result === TRUE) {
    $error= "Profile Updated";
   // header('Location:../example/index.php');
} else {
    $error=  "Try Again Later";
}
$conn->close();
echo $error;
?>



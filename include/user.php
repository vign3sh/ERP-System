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

$sql = "INSERT INTO user_details( first, last, Address, City, Country, postal, email,username) VALUES ('".$first."','".$last."','".$address."','".$city."','".$country."','".$postal."','".$email."','".$user."')";
$result = $conn->query($sql);
$error;
if ($result === TRUE) {
    $error= "Profile Update";
   // header('Location:../example/index.php');
} else {
    $error=  "Already Exist";
}
$conn->close();
echo $error;
?>



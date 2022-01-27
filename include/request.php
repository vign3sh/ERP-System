<?php

session_start(); 

include('connection.php');
$query = "select * from login where username='".mysqli_real_escape_string($conn, $_SESSION['name'])."'";               
$results = $conn->query($query);
$phone; 
$companyfield;   
$name;  
$types=$_POST['types'];             
while ($rows= $results->fetch_assoc()){ 
       $user_type=$rows['user_type'];
       if($user_type=='Admin'){
            
       // header('Location:example/index.php');
    $phone= $rows['contact'];
    $name=  $rows['name'];
       }
}
date_default_timezone_set("Asia/Calcutta");
$date= date("Y-m-d") ;


$sql = "INSERT INTO labour_request( l_name,  office_no,company_name) VALUES ('".$name."','".$phone."','".$types."')";



$result = $conn->query($sql);
$error;
if ($result === TRUE) {
    $error= "Created successfully";
   // header('Location:../example/index.php');
} else {
    $error=  "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
echo $error;
?>



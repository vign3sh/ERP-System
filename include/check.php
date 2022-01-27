<?php
 
 session_start(); 

 include('connection.php');
 $query = "select * from login where username='".mysqli_real_escape_string($conn, $_SESSION['name'])."'";
 $name;                     
 $results = $conn->query($query); 
 $output="";
              
 while ($rows= $results->fetch_assoc()){ 
    
     $name=  $rows['name'];
        
 }
$sql = "SELECT access,company_name FROM labour_request WHERE  l_name ='".$name."'";
$results = $conn->query($sql); 

$type;              
 while ($row= $results->fetch_assoc()){ 
    $output= $row['access'];
    $type= $row['company_name'];

 

 
 }
 echo json_encode(array("access" => $output, "name" => $type));   //header('Location:../example/index.php';
$conn->close();










?>
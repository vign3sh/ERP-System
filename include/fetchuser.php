<?php
 
 session_start(); 

 include('connection.php');
 $query = "select * from login where username='".mysqli_real_escape_string($conn, $_SESSION['name'])."'";
 $name;                     
 $results = $conn->query($query); 
 $output="";
              
 while ($row= $results->fetch_assoc()){ 
    
     $name=  $row['name'];
        
 }
$sql = "SELECT * from user_details WHERE  username ='".$name."'";
$results = $conn->query($sql); 

$type; 
       
 while ($rows= $results->fetch_assoc()){ 
    $first=$rows['first'];  
    $last=$rows['last'];  
    $address=$rows['Address'];  
    $city=$rows['City'];  
    $country=$rows['Country'];  
    $postal=$rows['postal'];  
    $email=$rows['email']; 
    echo json_encode(array("First" => $first, "Last" => $last,"Address"=>$address,"City"=>$city,"Country"=>$country,"Postal"=>$postal,"Email"=>$email));   //header('Location:../example/index.php';

 
 }
 

$conn->close();










?>
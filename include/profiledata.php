
<?php
session_start();
include('connection.php');

$query = "select * from login where username='".mysqli_real_escape_string($conn, $_SESSION['name'])."'";
$results = $conn->query($query);

while ($rows= $results->fetch_assoc()){ 
   $name= $rows['name'];
   $time= date("d-m-Y-h:i:s", strtotime($rows['time']));


echo json_encode(array("timestamp" => $time, "Name" => $name));   //header('Location:../example/index.php';


} 
 ?>


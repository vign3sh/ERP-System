<?php
 
session_start(); 


if (array_key_exists("id", $_SESSION) AND $_SESSION['id']){

}

else{
    
    header('Location:../index.php');
}

if(isset($_POST['submit']) && array_key_exists("submit", $_POST)){
    
include("../connection.php");

$displayid=$_POST['display_id'];
$caption= $_POST['caption'];
$opendate=$_POST['opening_date'];
$c_name=$_POST['c_name'];

$sql1="SELECT c_id from client where c_name='".$c_name."'";
$result1 = $conn->query($sql1);

 while($row = $result1->fetch_assoc()) {
  $c_id= $row['c_id']; 
}

$sql = "INSERT into display(display_id,caption,opening_date,c_id) VALUES('$displayid','$caption','$opendate','$c_id')";



$result = $conn->query($sql);

if ($result === TRUE) {
    echo "New record created successfully";
     header('Location:../example/operations.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

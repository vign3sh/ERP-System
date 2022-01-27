<?php
 
session_start(); 


if (array_key_exists("id", $_SESSION) AND $_SESSION['id']){

}

else{
    
    header('Location:../index.php');
}



    
include("connection.php");
date_default_timezone_set("Asia/Calcutta");
//$date= date("Y-m-d") ;


$sql = "DELETE FROM `login` WHERE name ='". $_POST['name']."'";

$output;

$result = $conn->query($sql);

if ($result === TRUE) {
    $output= "Deleted succesfully";
    //header('Location:../example/index.php');
} else {
    $output= "Error: " . $sql . "<br>" . $conn->error;
}

echo $output;

$conn->close();










?>
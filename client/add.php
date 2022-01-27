<?php
 
session_start(); 


if (array_key_exists("id", $_SESSION) AND $_SESSION['id']){

}

else{
    
    header('Location:../index.php');
}



if(isset($_POST['submit']) && array_key_exists("submit", $_POST)){
    
include("../include/connection.php");


date_default_timezone_set("Asia/Calcutta");
$date= date("Y-m-d") ;


$sql = "INSERT into  client(c_name,address,office_tel,mobile,
email_id,contact_person,reffered_by,cordinator) 
VALUES('".mysqli_real_escape_string($conn, $_POST['c_name']).
"','".mysqli_real_escape_string($conn, $_POST['address']).
"','".mysqli_real_escape_string($conn, $_POST['office_tel']).
"','".mysqli_real_escape_string($conn, $_POST['mobile']).
"','".mysqli_real_escape_string($conn, $_POST['email_id']).
"','".mysqli_real_escape_string($conn, $_POST['contact_person']).
"','".mysqli_real_escape_string($conn, $_POST['reffered_by']).
"','".mysqli_real_escape_string($conn, $_POST['cordinator'])."')";



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
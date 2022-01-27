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


$sql = "INSERT into  labour(l_name,company_name,office_address,city,
residence,residence_no,office_no,email_id,contact_person,joining_date) 
VALUES('".mysqli_real_escape_string($conn, $_POST['l_name']).
"','".mysqli_real_escape_string($conn, $_POST['company_name']).
"','".mysqli_real_escape_string($conn, $_POST['office_address']).
"','".mysqli_real_escape_string($conn, $_POST['city']).
"','".mysqli_real_escape_string($conn, $_POST['residence']).
"','".mysqli_real_escape_string($conn, $_POST['residence_no']).
"','".mysqli_real_escape_string($conn, $_POST['office_no']).
"','".mysqli_real_escape_string($conn, $_POST['email_id']).
"','".mysqli_real_escape_string($conn, $_POST['contact_person']).
"','".mysqli_real_escape_string($conn, $_POST['joining_date'])."')";



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
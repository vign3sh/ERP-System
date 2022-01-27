 <?php


 if (isset($_COOKIE['fcookie'])) 
    $arr=json_decode($_COOKIE['fcookie']);
    $name=$_POST['name'];
    $uname=$_POST['username'];
    $pword=$_POST['password'];
    $contact=$_POST['contact'];
    $usertype=$_POST['usertype'];
include('../include/connection.php');

  $sql = "INSERT into  login(name,contact,username,password,user_type) 
VALUES('".mysqli_real_escape_string($conn,$name).
"','".mysqli_real_escape_string($conn, $contact).
"','".mysqli_real_escape_string($conn, $uname).
"','".mysqli_real_escape_string($conn, $pword).
"','".mysqli_real_escape_string($conn, $usertype)."')";



$result = $conn->query($sql);

if ($result === TRUE) {
    echo "New record created successfully";
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>
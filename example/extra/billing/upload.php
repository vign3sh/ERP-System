<?php 
if(isset($_POST['submit'])){
  include("../../include/connection.php");

if($_POST['invoice']=='Latest'){

  $query1 = "select invoice from bill where id=(Select max(id) from bill)";
  $results = $conn->query($query1);
  $rows= $results->fetch_assoc();
  $invoice=$rows['invoice'];
}

 else{
  $invoice=$_POST['invoice'];
 }


 $query1="Select * from bill_image where invoice='".$invoice."'";
 $result=$conn->query($query1);
 if ($result->num_rows > 0) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Repeated Invoice Number");'; 
    echo 'window.location.href = "../billing.php";';
    echo '</script>';
 }

else{
$inv=str_replace("/","-",$invoice);
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$target_name= $target_dir.$inv.".pdf";
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if($FileType != "pdf" ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}




if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 

else 
    {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_name))
            {
           
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

              $sql = "INSERT INTO bill_image (invoice,file_name)
              VALUES ('".$invoice."','".$target_name."')";

              if ($conn->query($sql) === TRUE) {
                   echo '<script type="text/javascript">'; 
                   echo 'alert("New record created successfully");'; 
                   echo 'window.location.href = "../billing.php";';
                   echo '</script>';
                   header('Location:../billing.php');
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }
              $conn->close();
          
            }


          else {
                echo "Sorry, there was an error uploading your file.";
          }
      }
    }
}


else{
  header('Location:../../index.php');
}

?>

            
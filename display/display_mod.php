

<?php
//Used to display contents for view and modify
session_start(); 

if((isset($_POST['back']) && array_key_exists("back", $_POST))OR!(array_key_exists("id", $_SESSION) AND $_SESSION['id'])){

  header('Location:../home.php');
}




include("../connection.php");

  
  $query = "SELECT * FROM display where display_id ='".mysqli_real_escape_string($conn, $_POST['disp'])."'";
  
  $result = $conn->query($query) or die($conn->error);



if(isset($_POST['sub'])){
$sql = "UPDATE display SET display_id='".mysqli_real_escape_string($conn, $_POST['display_id'])."', 
        caption='".mysqli_real_escape_string($conn, $_POST['caption'])."',
        opening_date='".mysqli_real_escape_string($conn, $_POST['opening_date'])."' 
        WHERE display_id='".mysqli_real_escape_string($conn, $_POST['display_id'])."'";

$query1 ="SELECT c_id FROM client where c_name ='".mysqli_real_escape_string($conn, $_POST['c_name'])."'";
$result1 = $conn->query($query1) or die($conn->error);
$row1= $result1->fetch_assoc();
$cid=$row1['c_id'];
echo $cid;
$query1 ="UPDATE display SET c_id='".mysqli_real_escape_string($conn, $cid)."' 
        WHERE display_id='".mysqli_real_escape_string($conn, $_POST['display_id'])."'";
$result1 = $conn->query($query1);



if ($conn->query($sql) === TRUE) {   
    echo "<script type='text/javascript'>alert('Modified Successfully!')</script>";
    }

else {
    echo "Error updating record: " . $conn->error;
}

}

?>



<html>
	<head>
   	 <title>display_mod</title>

     <meta charset="utf-8" />
     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <style type="text/css">

       
 		 </style>    
	</head>

<body>
  
  
   

   <div class="w3-responsive">  
    <form method="post">
   <table class="w3-table-all">
    <thead class="w3">
        <tr>
            <th>Display ID</th>
            <th>Display Name</th>
            <th>Opening Date</th>
            <th>Company name</th>
            
        </tr>
    </thead>
    <tbody>
    
        <!--Use a while loop to make a table row for every DB row-->
        
        
        <?php while( $row = $result->fetch_assoc()) : 
         $c_id=$row['c_id'];
         $query1 = "SELECT c_name FROM client where c_id ='".mysqli_real_escape_string($conn, $c_id)."'";
         $result1 = $conn->query($query1) or die($conn->error);
         $row1= $result1->fetch_assoc();
         
        ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->

            <td ><input name="display_id" type='text' value="<?php echo $row['display_id']; ?>" style='border:none;'></input></td>
            <td ><input name="caption" type='text' value="<?php echo $row['caption']; ?>"  style='border:none;'></input></td>
            <td ><input name='opening_date' type='date' value="<?php echo $row['opening_date']; ?>"  style='border:none;'></input></td>
            <td ><input name='c_name' type='text' value="<?php echo $row1['c_name']; ?>"  style='border:none;'></input></td>
          
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

   
  <div class="form-group" style="margin-top: 20px;">
    <input type="submit" id="submit" name="sub">
  </div>

  
</form>
</div>


</body>
</html>
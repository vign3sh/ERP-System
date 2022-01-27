

<?php
//Used to display contents for view and modify
session_start(); 

if((isset($_POST['back']) && array_key_exists("back", $_POST))OR!(array_key_exists("id", $_SESSION) AND $_SESSION['id'])){

  header('Location:../example/operations.php');
}




include("../include/connection.php");





if($_POST['l_name_l']==0){

  $query = "SELECT * FROM labour where l_id ='".mysqli_real_escape_string($conn, $_POST['id_l'])."'";
  
  $result = $conn->query($query);

}

if($_POST['l_name_l']){

  $query = "SELECT * FROM labour where l_name ='".mysqli_real_escape_string($conn, $_POST['l_name_l'])."'";
  
  $result = $conn->query($query) ;

}


if(isset($_POST['sub'])){

$sql = "UPDATE labour SET l_name='".mysqli_real_escape_string($conn, $_POST['l_name'])."', 
        company_name='".mysqli_real_escape_string($conn, $_POST['company_name'])."',
        office_address='".mysqli_real_escape_string($conn, $_POST['office_address'])."',
        office_no='".mysqli_real_escape_string($conn, $_POST['office_no'])."',
        city='".mysqli_real_escape_string($conn, $_POST['city'])."',
        residence='".mysqli_real_escape_string($conn, $_POST['residence'])."',
       residence_no='".mysqli_real_escape_string($conn, $_POST['residence_no'])."',
       email_id='".mysqli_real_escape_string($conn, $_POST['email_id'])."', 
        joining_date='".mysqli_real_escape_string($conn, $_POST['joining_date'])."',
        contact_person='".mysqli_real_escape_string($conn, $_POST['contact_person'])."',
        total_amount='".mysqli_real_escape_string($conn, $_POST['total_amount'])."'
        WHERE l_id='".$_POST['l_id']."'";


         
       
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
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <style type="text/css">
     	
     
   	 </style>    
	</head>

<body>
  
  
   
   <div class="w3-responsive">
   <form method="post">   
   <table class="w3-table-all">
    <thead>
        <tr>
            <th>Labour id</th>
            <th>Labour Name</th>
            <th>Comany Name</th>
            <th>Office Address</th>
            <th>Office No</th>
            <th>City</th>
            <th>Residence</th>
            <th>Residence No</th>
            <th>Email ID</th>
            <th>Joining Date</th>
            <th>Contact</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
    
        <!--Use a while loop to make a table row for every DB row-->
        
        
        <?php while( $row = $result->fetch_assoc()) :        
        ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td ><input name="l_id" type='number' value="<?php echo $row['l_id']; ?>" readonly style='border:none; width:60px;'></input></td>

            <td ><input name="l_name" type='text' value="<?php echo $row['l_name']; ?>"  style='border:none;'></input></td>
            <td ><input name='company_name' type='text' value="<?php echo $row['company_name']; ?>"  style='border:none;'></input></td>
            <td ><input name='office_address' type='text' value="<?php echo $row['office_address']; ?>"  style='border:none;'></input></td>
            <td ><input name='office_no' type='number' value="<?php echo $row['office_no']; ?>" style='border:none;'></input></td>
           <td ><input name='city' type='text' value="<?php echo $row['city']; ?>"  style='border:none;'></input></td>
            <td ><input name='residence' type='text' value="<?php echo $row['residence']; ?>"  style='border:none;'></input></td>
             <td ><input name='residence_no' type='number' value="<?php echo $row['residence_no']; ?>"  style='border:none;'></input></td>
            <td ><input name='email_id' type='text' value="<?php echo $row['email_id']; ?>"  style='border:none;'></input></td>
            <td ><input name='joining_date' type='text' value="<?php echo $row['joining_date']; ?>" readonly style='border:none;'></input></td>
            <td ><input name='contact_person' type='text' value="<?php echo $row['contact_person']; ?>"  style='border:none;'></input></td>
            <td ><input name='total_amount' type='number' value="<?php echo $row['total_amount']; ?>" readonly style='border:none;'></input></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>


  <div class="form-group element">

    <input type="submit" id="submit" name="sub">
  </div>

</form>
</div>

</body>
</html>
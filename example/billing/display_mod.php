

<?php
//Used to display contents for view and modify
session_start(); 

if((isset($_POST['back']) && array_key_exists("back", $_POST)) OR !(array_key_exists("id", $_SESSION) AND $_SESSION['id'])){
  header('Location:../billing.php');
}





include("../../include/connection.php");


 $invoice=$_POST['invoice'];  

  $query = "SELECT * FROM bill where invoice ='".mysqli_real_escape_string($conn, $invoice)."'";
  
  $result = $conn->query($query);



if(isset($_POST['sub'])){

$sql = "UPDATE bill SET status='".mysqli_real_escape_string($conn, $_POST['status'])."'
        WHERE invoice='".$_POST['invoice']."'";


         
       
if ($conn->query($sql) === TRUE) {   
    echo "<script type='text/javascript'>alert('Modified Successfully!')</script>";
    header('Location:../billing.php');
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
            <th>Invoice</th>
            <th>Company Name</th>
            <th>Date of Bill</th>
            <th>Total Amount</th>
            <th>Status</th>

        </tr>
    </thead>
    <tbody>
    
        <!--Use a while loop to make a table row for every DB row-->
        
        
        <?php while( $row = $result->fetch_assoc()) :        
        ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td ><input name="invoice" type='text' value="<?php echo $row['invoice']; ?>" readonly style='border:none;'></input></td>
            <td ><input name="" type='text' value="<?php echo $row['comp_name']; ?>" readonly style='border:none;'></input></td>
            <td ><input name='' type='text' value="<?php echo $row['bill_date']; ?>" readonly  style='border:none;'></input></td>
            <td ><input name='' type='text' value="<?php echo $row['total']; ?>"  readonly style='border:none;'></input></td>


            <td>
                <select name='status'>
                <option selected value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                <option value="Pending">Pending</option>
                <option value="Paid">Paid</option>
                <option value="Partially paid"> Partially Paid</option>
                </select>

            </td>


           
         
            
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
<?php
//Used to display contents for view and modify
session_start(); 

if((isset($_POST['back']) && array_key_exists("back", $_POST)) OR !(array_key_exists("id", $_SESSION) AND $_SESSION['id'])){
  header('Location:../billing.php');
}





include("../../include/connection.php");


 $invoice=$_POST['invoice'];  
  
  if($invoice=='All'){
        $query = "SELECT * FROM bill";
  }

  else if($invoice=="Pending"){
        $query = "SELECT * FROM bill where status ='Pending' ";

  }
    
    else if($invoice=="Paid"){
        $query = "SELECT * FROM bill where status ='Paid' ";

  }

  else if($invoice=="Partially paid"){
        $query = "SELECT * FROM bill where status ='Partially paid' ";

  }  

  else{
  $query = "SELECT * FROM bill where invoice ='".mysqli_real_escape_string($conn, $invoice)."'";
  }

  $result = $conn->query($query);


?>



<html>
	<head>
   	 <title>Example Domain</title>

     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    
     <style type="text/css">

        form{
             
             align-items: center;
             margin: auto;
            width: 30%;
            margin-top: 20px;
        }

         .element{
                display: block;

         }
    

   		 </style>    
	</head>

<body>

<div class="w3-responsive" id="top">
      
   <table class="w3-table-all">
    <thead>
        <tr >
            <th>Invoice</th>
            <th>Company Name</th>
            <th>Date of Bill</th>
            <th>Total Amount</th>
            <th>Status</th>
            <th>View Copy</th>
        </tr>
    </thead>
    
    <tbody>
    
        <!--Use a while loop to make a table row for every DB row-->
        
        
        <?php while( $row = $result->fetch_assoc()) :       
        ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['invoice']; ?></td>
            <td><?php echo $row['comp_name']; ?></td>
            <td><?php echo $row['bill_date']; ?></td>
            <td><?php echo $row['total']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <?php  
             $query1 = "SELECT file_name FROM bill_image where invoice ='".mysqli_real_escape_string($conn,$row['invoice'])."'";
             $result1 = $conn->query($query1); 

             if ($result1->num_rows > 0) {
             $row1 = $result1->fetch_assoc();
              
             $pdf= $row1['file_name'];
             $softcopy='Softcopy';
           }
             else {
                $pdf='#';
                $softcopy='No Softcopy';
              }
            
             ?>

            <td><a href="<?php echo $pdf;?>"><?php echo $softcopy;?></a></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>


</div>

</body>
</html>
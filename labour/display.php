

<?php
//Used to display contents for view and modify
session_start(); 

if((isset($_POST['back']) && array_key_exists("back", $_POST)) OR !(array_key_exists("id", $_SESSION) AND $_SESSION['id'])){
  header('Location:../example/operations.php');
}





include("../include/connection.php");


 $lname=$_POST['l_name_l'];  

if($lname==0){
    


  $query = "SELECT * FROM labour where l_id ='".mysqli_real_escape_string($conn, $_POST['id_l'])."'";
  
  $result = $conn->query($query) or die($conn->error);



}

if($lname){
  

  $query = "SELECT * FROM labour where l_name ='".mysqli_real_escape_string($conn, $lname)."'";
  
  $result = $conn->query($query);

}
?>



<html>
	<head>
   	 <title>Labour Records</title>

     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
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

      
   <table class="table table-striped table-dark table-bordered table-responsive">
    <thead class="thead-dark">
        <tr >
            <th>Labour Id</th>
            <th>Labour Name</th>
            <th>Comany Name</th>
            <th>Office Address</th>
            <th>City</th>
            <th>Residence</th>
            <th>Residence No</th>
            <th>Office No</th>
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
            <td><?php echo $row['l_id']; ?></td>
            <td><?php echo $row['l_name']; ?></td>
            <td><?php echo $row['company_name']; ?></td>
            <td><?php echo $row['office_address']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['residence']; ?></td>
             <td><?php echo $row['residence_no']; ?></td>
            <td><?php echo $row['office_no']; ?></td>
            <td><?php echo $row['email_id']; ?></td>
            <td><?php echo $row['joining_date']; ?></td>
            <td><?php echo $row['contact_person']; ?></td>
            <td><?php echo $row['total_amount']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>




</body>
</html>
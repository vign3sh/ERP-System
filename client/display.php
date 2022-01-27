

<?php
//Used to display contents for view and modify
session_start(); 

if((isset($_POST['back']) && array_key_exists("back", $_POST)) OR !(array_key_exists("id", $_SESSION) AND $_SESSION['id'])){
  header('Location:../example/operations.php');
}





include("../include/connection.php");


 $cname=$_POST['cli_name'];  

if($cname==0){
    


  $query = "SELECT * FROM client where c_id ='".mysqli_real_escape_string($conn, $_POST['c_id'])."'";
  
  $result = $conn->query($query) or die($conn->error);



}

if($cname){
  

  $query = "SELECT * FROM client where c_name ='".mysqli_real_escape_string($conn, $cname)."'";
  
  $result = $conn->query($query);

}
?>



<html>
	<head>
   	 <title>Client Record</title>

     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     
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
        <tr>
            <th scope="col">Client Id</th>
            <th scope="col">Client Name</th>
            <th scope="col">Address</th>
            <th scope="col">Office Telephone</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Email ID</th>
            <th scope="col">Contact Person</th>
            <th scope="col">Reffered By</th>
            <th scope="col">Cordinator</th>
        </tr>
    </thead>
    
    <tbody>
    
        <!--Use a while loop to make a table row for every DB row-->
        
        
        <?php while( $row = $result->fetch_assoc()) :       
        ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['c_id']; ?></td>
            <td><?php echo $row['c_name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['office_tel']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['email_id']; ?></td>
            <td><?php echo $row['contact_person']; ?></td>
            <td><?php echo $row['reffered_by']; ?></td>
            <td><?php echo $row['cordinator']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>



</body>
</html>
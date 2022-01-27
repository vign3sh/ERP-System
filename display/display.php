

<?php
//Used to display contents for view and modify
session_start(); 

if((isset($_POST['back']) && array_key_exists("back", $_POST))OR!(array_key_exists("id", $_SESSION) AND $_SESSION['id'])){

  header('Location:../home.php');
}




include("../connection.php"); 



  
  $query = "SELECT * FROM display where display_id ='".mysqli_real_escape_string($conn, $_POST['disp'])."'";
  
  $result = $conn->query($query) or die($conn->error);

?>



<html>
	<head>
   	 <title>Example Domain</title>

     <meta charset="utf-8" />
     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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


<div class="w3-responsive">
      
   <table class="w3-table-all">
    <thead>
        <tr class="w3-red">
            <th>Display ID</th>
            <th>Caption</th>
            <th>Opening Date</th>
            <th>Company Name</th>
        </tr>
    </thead>
    <tbody>
    
        <!--Use a while loop to make a table row for every DB row-->
        
        
        <?php while( $row = $result->fetch_assoc()) :   
            $query1 = "SELECT c_name FROM client where c_id ='".mysqli_real_escape_string($conn, $row['c_id'])."'";
            $result1 = $conn->query($query1) or die($conn->error);
            $row1=$result1->fetch_assoc();
            $cname=$row1['c_name']; 
        ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['display_id']; ?></td>
            <td><?php echo $row['caption']; ?></td>
            <td><?php echo $row['opening_date']; ?></td>
            <td><?php echo $cname; ?></td>

        </tr>
        <?php endwhile ?>
    </tbody>
</table>
</div>

</body>
</html>
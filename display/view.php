<?php
 
session_start(); 


if (array_key_exists("id", $_SESSION) AND $_SESSION['id']){

}

else{
    
    header('Location:../index.php');
}



?>



<!doctype html>
<html lang="en">
  <head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>Labour-Modify</title>
    <style type="text/css">

    </style>
  </head>
  <body>
   

  
<div class="w3-card-4">

  <form method='post' action="../display/display.php" >
  <header class="w3-container w3-blue w3-center">
  <h1>Veiw Display</h1>
 </header>

<div class="w3-container w3-center  w3-card-4 w3-light-grey">
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-card"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-xxlarge" id="display_id" list="disp" name="disp" placeholder="select display" style="margin-bottom: 15px" autocomplete="off" required>
    <datalist id="disp">
      
      <?php
        include("../connection.php");
        
        $query = "select display_id from display order by display_id";
        $results = $conn->query($query);

        while ($rows= $results->fetch_assoc()){ 
      ?>
     <option value="<?php echo $rows['display_id'];?>">
     <?php
       } 
      ?>
    </datalist>
  
    </div>
</div>

</div>

<footer class="w3-container w3-center w3-card-4 w3-light-grey">
  <br>
<input style="width:60%" class="w3-button w3-purple w3-round-xxlarge" type="submit" name="submit"  value="Submit">
<br>
<br>
</footer>
  

</form>
</div>



    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>




















 
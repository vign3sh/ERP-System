<?php


 session_start(); 
$site=$_POST['site'];


//echo $site;
 include('connection.php');
                    $query = "select *  from site where site_name='".mysqli_real_escape_string($conn, $site)."'";
                    //$query="insert into site(site_name) values('".$site."'')";
                        $results = $conn->query($query);
                        $name;
                       
                        while ($rows= $results->fetch_assoc()){ 

                        	$name= $rows['current_display'];

                             echo json_encode(array("dis_name" => $name));
                        }

    

                     

                      ?>
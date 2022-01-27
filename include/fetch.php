<?php

include('../include/connection.php');
//if (isset($_POST['date'])) {
//$date = $_POST['date'];

$query = mysqli_query($conn, "select site.area,site.site_code,site.site_name,site.traffic,site.ill,site.length,site.breadth,site.availibilty 
from site");


 $result = array();
 while ($rows = mysqli_fetch_assoc($query)) {
    $ar = "";
        $area = $rows['area'];
        $site_code = $rows['site_code'];
        $site_name = $rows['site_name'];
        $traffic= $rows['traffic'];
        $type = $rows['ill'];
        $length = $rows['length'];
        $breadth = $rows['breadth'];
        $avail = $rows['availibilty'];
        $avail=date("d-m-Y", strtotime($avail));

        $result[] = array($ar,$area,$site_code,$site_name,$traffic,$type,$length,$breadth,$avail);
    }

echo json_encode(array("data"=>$result));
//}
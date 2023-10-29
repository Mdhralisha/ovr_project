<?php
include "../config.php";
$sql = "select vehicle_id,vehicle_name from vehicle";
$query=mysqli_query($conn,$sql);
$json = array();
while($row=mysqli_fetch_assoc($query)){
    array_push($json,$row);
}
echo(json_encode($json));
?>
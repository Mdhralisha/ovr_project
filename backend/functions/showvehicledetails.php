<?php
 //include  "../../backend/config.php";
$vehicle_id = $_GET['vehicle_id'];
$sql="select * from vehicle join categories on vehicle.category_id=categories.category_id where vehicle_id='$vehicle_id'";
$result=mysqli_query($conn, $sql);

?>
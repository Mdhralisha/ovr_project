<?php
include "../../backend/config.php";
$sql = "SELECT * FROM vehicle join categories on vehicle.category_id=categories.category_id where vehicle_status='Available' order by vehicle_id  desc limit 3";
$result = mysqli_query($conn,$sql);


?>
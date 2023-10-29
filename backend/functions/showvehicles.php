<?php

$sql = "SELECT * FROM vehicle join categories on vehicle.category_id=categories.category_id";
$result = mysqli_query($conn,$sql);


?>
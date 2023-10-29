<?php

include "../../backend/config.php";

$sql = "SELECT count(customer_id) as total_customer FROM customer";
$result = mysqli_query($conn,$sql);

$two_query = "SELECT count(vehicle_id) as total_two FROM vehicle where category_id='1'";
$three_query = "SELECT count(vehicle_id) as total_four FROM vehicle where category_id='2'";

$result2= mysqli_query($conn,$two_query);
$result3= mysqli_query($conn,$three_query);






?>
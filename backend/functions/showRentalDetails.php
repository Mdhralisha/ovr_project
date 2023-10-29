<?php
include "../../backend/config.php";
$sql = "Select * from rent join customer on rent.customer_id = customer.customer_id join vehicle on vehicle.vehicle_id = rent.vehicle_id join payment on payment.payment_id=rent.payment_id order by rental_id asc";
$result = mysqli_query($conn,$sql);






?>
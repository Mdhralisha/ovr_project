<?php

include "../../backend/config.php";

$sql = "SELECT count(customer_id) as total_customer FROM customer";
$result = mysqli_query($conn,$sql);

$two_query = "SELECT count(vehicle_id) as total_two FROM vehicle where category_id='1'";
$three_query = "SELECT count(vehicle_id) as total_four FROM vehicle where category_id='2'";

$result2= mysqli_query($conn,$two_query);
$result3= mysqli_query($conn,$three_query);

if(isset($_SESSION['customer_id'])){
$customerid=$_SESSION['customer_id'];
$book_query="SELECT COUNT(rental_id) as total_booking from rent where customer_id='$customerid' and (rental_status='Approved' or rental_status='Returned')";

$result4=mysqli_query($conn,$book_query);

}
?>
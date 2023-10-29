<?php
include "../config.php";
$vehicle_id = $_GET['vehicle_id'];
$rental_id = $_GET['rental_id'];
$sql = "update vehicle set vehicle_status='Available' where vehicle_id = '$vehicle_id'";
$sql2 = "update rent set rental_status='Returned' where rental_id = '$rental_id'";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);
if($result){
    header('location:../../frontend/pages/rentalmgmnt_admin.php');
}


?>
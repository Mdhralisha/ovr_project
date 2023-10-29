<?php 
include "../config.php";
$rental_id = $_GET['rental_id'];
$vehicle_id=$_GET['vehicle_id'];

$sql = "update rent set rental_status='Approved' where rental_id = '$rental_id'";
$sql2="update vehicle set vehicle_status='On Rent' where vehicle_id='$vehicle_id'";

$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);

if($result){
    header('location:../../frontend/pages/rentalmgmnt_admin.php');
}
?>
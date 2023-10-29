<?php 
include "../config.php";
$payment_id = $_GET['payment_id'];
$sql = "update payment set payment_status='completed' where payment_id = '$payment_id'";
$result = mysqli_query($conn,$sql);
if($result){
    header('location:../../frontend/pages/rentalmgmnt_admin.php');
}
?>
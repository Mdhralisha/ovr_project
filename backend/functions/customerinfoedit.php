<?php
include "../config.php";
session_start();
$customer_id = $_SESSION['customer_id'];

$customer_name=$_POST['fullname'];
$customer_email=$_POST['email'];
$customer_address=$_POST['address'];
$customer_contact=$_POST['contact'];


$sql = "UPDATE customer SET customer_name='$customer_name' , customer_email='$customer_email',customer_address='$customer_address', customer_contact='$customer_contact' where customer_id = '$customer_id'";
$result=mysqli_query($conn,$sql);

if($result){
    header("location:../../frontend/pages/customerdashboard.php");
}

?>
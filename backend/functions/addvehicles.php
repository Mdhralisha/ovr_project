<?php
include "../../backend/config.php";
if(isset($_POST['submit'])){
    $vehicle_name=$_POST['vname'];
    $price=$_POST['price'];
    $category=$_POST['vehicle_category'];
    $brand=$_POST['brand'];
    $color=$_POST['color'];
    $status=$_POST['vehicle_status'];
    $condition=$_POST['condition'];
    $vehicle_image=$_FILES['vehicle_image'];
    $file_name = $vehicle_image['name'];
    $tmp_name = $vehicle_image['tmp_name'];
    $file = '../../frontend/assets/uploads/'.$file_name;
    move_uploaded_file($tmp_name,$file);

if($price<0){
    header('location:../../frontend/pages/vehiclemngmnt.php?status="neg');

}
else{


// $sql="INSERT INTO vehicle(vehicle_name,vehicle_status, hourly_rate, vehicle_brand, category_id,color,vehicle_condition, vehicle_image)VALUES('$vehicle_name','$status','$price','$brand','$category','$color','$condition','$file_name')";
$sql_query="SET FOREIGN_KEY_CHECKS=0";
$sql = "INSERT INTO `vehicle`(`vehicle_name`, `vehicle_status`, `hourly_rate`, `vehicle_brand`, `color`, `vehicle_condition`, `vehicle_image`, `category_id`) VALUES('$vehicle_name','$status','$price','$brand','$color','$condition','$file_name','$category')";
$query_ans=mysqli_query($conn,$sql_query);
$result=mysqli_query($conn,$sql);
 if($result){
     header('location:../../frontend/pages/vehiclemngmnt.php');
 }
 else{
    echo "fail";
 }}

}

?>
<?php
include "../config.php";
$vehicle_id=$_POST['vehicle_id'];
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

$sql = "Update vehicle set vehicle_name ='$vehicle_name', vehicle_status='$status',hourly_rate='$price', vehicle_brand='$brand', color='$color',vehicle_condition='$condition', vehicle_image='$file_name',category_id='$category' where vehicle_id='$vehicle_id'";

$result=mysqli_query($conn,$sql);
if($result){
    header("location:../../frontend/pages/vehiclemngmnt.php");
}


?>
<?php
include "../config.php";
$category_id = $_POST['category_id'];
$category_name = $_POST['category_name'];
$sql = "Update categories set category_name = '$category_name' where category_id='$category_id'";
$result = mysqli_query($conn,$sql);
if($result){
    header('location:../../frontend/pages/category.php');
}else{
    echo("failed");
}



?>
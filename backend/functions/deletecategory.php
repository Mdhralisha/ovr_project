<?php
$host="localhost";
$user="root";
$password="";
$dbname="ovehiclerental";
$conn=mysqli_connect($host,$user,$password,$dbname)or die();
$id=$_GET['cid'];
$sql="DELETE FROM `category` WHERE category_id='$id'";
$result=mysqli_query($conn,$sql);
 if($result){
 header("location:../../frontend/pages/category.php");
 }
 else{
  echo "deletion failed";
 }


?>
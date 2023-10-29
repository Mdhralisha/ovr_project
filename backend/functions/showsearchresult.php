<?php
include "../../backend/config.php";

$searchData = $_POST['search'];
$sql="SELECT * FROM vehicle where vehicle_name like '$searchData%'";
$result=mysqli_query($conn,$sql);
$array = array();

while($row = mysqli_fetch_assoc($result)){
    array_push($array,$row);
}
header('location:../../frontend/pages/searchresult.php')

?>
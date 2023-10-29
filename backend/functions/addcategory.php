<?php
include "../../backend/config.php";
if(isset($_POST['submit'])){
    $category_name = $_POST['category_name'];
    $sql = "INSERT INTO categories(category_name)values('$category_name')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:../../frontend/pages/category.php');
    }else{
        echo "Fail";
    }
}

?>
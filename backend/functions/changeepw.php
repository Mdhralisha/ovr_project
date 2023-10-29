<?php
session_start();
$customer_id =$_SESSION['customer_id'];
include "../config.php";
$sql = "select password from customer where customer_id='$customer_id' ";
$old_password = $_POST['password'];
$new_pass = $_POST['new'];
$confirm_pass = $_POST['confirm'];
$query = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query)){
    $db_pass = $row['password'];
}
if(password_verify($old_password,$db_pass)==1){
    if($new_pass==$confirm_pass){
        $new_hashed_pw = password_hash($new_pass,PASSWORD_DEFAULT);
        $sql2 ="UPDATE customer set password='$new_hashed_pw'  where customer_id=$customer_id ";
        $result = mysqli_query($conn,$sql2);
        if($result){
            header('location:../../frontend/pages/changepw.php?status="success"');
        }else{
            echo("failed");
        }
    }
}


?>
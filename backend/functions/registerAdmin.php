<?php
include "../config.php";
if(isset($_POST['signup'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $admin_password = $_POST['admin_password'];
    $hashed_admin_password = password_hash($admin_password,PASSWORD_DEFAULT);
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $sql = "INSERT into admin(admin_name,admin_email,admin_contact,admin_address,password)values('$full_name','$email','$contact','$address','$hashed_admin_password')";

    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:../../frontend/pages/admin_login.php');
    }else{
        echo "Fail";
    }

}

?>
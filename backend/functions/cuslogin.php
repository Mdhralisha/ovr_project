<?php
include "../config.php";
if(isset($_POST['login'])){
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM customer";

    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $db_email = $row['customer_email'];
        $db_password = $row['password'];
        $db_customer = $row['customer_name'];
        $db_customer_id = $row['customer_id'];
        if($user_email==$db_email){
            if(password_verify($password,$db_password)==1){
                header('location:../../frontend/pages/customerdashboard.php');
                session_start();
                $_SESSION['customer_name']=$db_customer;
                $_SESSION['customer_id']=$db_customer_id;
                break;
            }else{
                header('location:../../frontend/pages/customer_login.php?status="fail"');
            }
        }
        else{
            header('location:../../frontend/pages/customer_login.php?status="fail"');
        }
    }
  

}


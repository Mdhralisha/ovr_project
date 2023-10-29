<?php
include "../config.php";
if(isset($_POST['login'])){
    $user_email = $_POST['admin_email'];
    $password = $_POST['password'];
    
    
    $sql = "SELECT * FROM admin";

    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $db_email = $row['admin_email'];
        $db_password = $row['password'];
        $db_admin = $row['admin_name'];
        if($user_email==$db_email){
            if(password_verify($password,$db_password)==1){
                header('location:../../frontend/pages/admin_dashboard.php');
                session_start();
                $_SESSION['admin_name']=$db_admin;
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


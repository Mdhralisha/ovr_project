<?php
include "../config.php";
if(isset($_POST['signup'])){
    $query = "select customer_email from customer";
    $query_result = mysqli_query($conn,$query);


    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $customer_password = $_POST['customer_password'];
    $hashed_password = password_hash($customer_password,PASSWORD_DEFAULT);
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $available_status = 0;
    while($row=mysqli_fetch_assoc($query_result)){
        if($email==$row['customer_email']){
            $available_status=1;
            break;
        }
    }

    if($available_status==0){
        $sql = "INSERT into customer(customer_name,customer_email,customer_contact,customer_address,password)values('$full_name','$email','$contact','$address','$hashed_password')";

        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:../../frontend/pages/customer_login.php');
        }else{
            echo "Fail";
        }
    }else{
        header('location:../../frontend/pages/signup.php?condition="failed');
        
    }
   

}

?>
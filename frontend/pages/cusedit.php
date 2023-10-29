<?php
include "../../backend/config.php";
session_start();
$customer_id = $_SESSION['customer_id'];
$sql = "SELECT * from customer where customer_id='$customer_id'";
$query = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query)){
    $customer_name=$row['customer_name'];
    $customer_contact=$row['customer_contact'];
    $customer_email=$row['customer_email'];
    $customer_address=$row['customer_address'];
}
?>
<style><?php include "../assets/css/cusedit.css";?></style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Edit</title>
    <link rel="stylesheet" href="../assets/css/cusedit.css?v=1">
</head>
<body>
    <div class="main">
        <div class="edit">
    <h1>Edit Information</h1>
        </div>
    
        
            <form action="../../backend/functions/customerinfoedit.php" method="POST">
            <div class="inside">
                <input type="text" placeholder="Full Name" class="fname" name="fullname" value="<?php echo($customer_name)?>"><br><br>
                <input type="email" placeholder="Email" class="email" name="email" value="<?php echo($customer_email);?>"><br><br>
                <input type="text" placeholder="Address" class="address" name="address" value="<?php echo($customer_address);?>"><br><br>
                <input type="number" placeholder="Contact" class="contact"name="contact" value="<?php echo($customer_contact)?>"><br><br><br>
                <a href="changepw.php">Change Password</a>
                <input type="submit" value="Save Changes" class="save" name="submit">
            </div>
            </form>
      
    </div>
</body>
</html>
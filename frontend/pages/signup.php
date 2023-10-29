<?php
if(isset($_GET['condition'])){  
?>
<script>alert("user already exists")</script>
<?php
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reg page</title>
    <link rel="stylesheet" href="../assets/css/signup.css">
</head>
<body>
    <div class="main">
        <div class="left">
           
            <h1 class="welcome">Welcome Back!</h1>
            <p class="para">To keep connected with us please
                <br>sign up with your personal info!!
</p>
        </div>
    <div class="right">
        <h1 class="create">Create Account</h1><div class="hr"><hr></div>
        <br><br>
        <form action="../../backend/functions/registercustomer.php" method="post">
            <input type="text" placeholder="Full Name" name="full_name" class="name" required>
            <input type="email" placeholder="Email" name="email" class="name" required>
            <input type="password" placeholder="Password" class="name" name="customer_password">
            <input type="text" placeholder="Address" name="address" class="name">
            <input type="number" placeholder="Contact" class="name" name="contact">
            <br><br><br>

            <input type="submit" value="Sign Up" class="btn" name="signup">
        </form>
      
    </div>
    </div>
    
    
</body>
</html>
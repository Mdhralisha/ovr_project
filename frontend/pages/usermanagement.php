<?php
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:admin_login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User Mngmnt</title>
    <link rel="stylesheet" href="../assets/css/usermanagement.css?v=1">
    <link rel="stylesheet" href=//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>
</head>
<style>
    <?php include "../assets/css/usermanagement.css";?>
</style>
<body>
<div class="admin-dashboard-header">
        <div class="page-heading">
        <a href="admin_dashboard.php" class="vr">Vehicle Rental</a>
        </div>
        <div class="greet-section">
            Welcome <?php echo($_SESSION['admin_name']) ?>
        </div>
    </div>
    <div class="admin-main">
        <div class="left-section">
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="fa-solid fa-user-group" style="color: #139235;"></i>
                        User Management
                    </a>
                </li>
                <li>
                    <a href="category.php">
                        <i class="fa-solid fa-car" style="color: #139235;"></i>
                        Category Management
                    </a>
                </li>

                <li>
                    <a href="vehiclemngmnt.php">
                        <i class="fa-solid fa-car" style="color: #139235;"></i>
                        Vehicle Management
                    </a>
                </li>
                <li>
                    <a href="rentalmgmnt_admin.php">
                        <i class="fa-solid fa-code-pull-request" style="color: #139235;"></i>
                        Rental Management
                    </a>
                </li>
                <li>
                    <a href="report.php">
                        <i class="fa-solid fa-user-group" style="color: #139235;"></i>
                        Reports
                    </a>
                </li>
            </ul>
        </div>

        <div class="right-section">
           
               

            <h1 class="vtext">User Information!</h1>
            <center>
                <div class="tab">
                    <table border="1">
                 <tr>
                        <th>S.N</th>
                        <th>UserName</h>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                       
                    </tr>
                    <?php
                    include '../../backend/config.php';
                    
                    include '../../backend/functions/showuserinfo.php';
                    $i=1;

                    while($row=mysqli_fetch_assoc($result)){?>
                    <tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo($row['customer_name']); ?></td>
                        <td><?php echo($row['customer_contact']); ?></td>
                        <td><?php echo($row['customer_email']); ?></td>
                        <td><?php echo($row['customer_address']); ?></td>
                        

                    </tr>
                    <?php
                    $i++;
                    }?>

                    

                    </table>
            </center>

        </div>
       
</body>
</html>
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
    <link rel="stylesheet" href="../assets/css/admin1.css?v=1">
    <link rel="stylesheet" href=//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>

    <title>Admin Dashboard</title>
    <style>
        <?php include "../assets/css/admin1.css" ?>
    </style>
</head>

<body>
    <div class="admin-dashboard-header">
        <div class="page-heading">
            <a href="admin_dashboard.php">Vehicle Rental</a>
        </div>
        <div class="greet-section">
            Welcome
            <?php
         echo " ".($_SESSION['admin_name'])?>
        </div>
        <div class="logout">
            <a href="../../backend/functions/admin_logout.php">Log Out</a>
        </div>
    </div>
    <div class="admin-main">
        <div class="left-section">
            <ul class="nav">
                <li>
                    <a href="usermanagement.php">
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
<?php
include "../../backend/functions/showDataDashboard.php";
while($row=mysqli_fetch_assoc($result)){
    $total_customer = $row['total_customer'];
}
while($row=mysqli_fetch_assoc($result2)){
    $total_two = $row['total_two'];
}
while($row=mysqli_fetch_assoc($result3)){
    $total_four = $row['total_four'];
}
while($row=mysqli_fetch_assoc($result4)){
    $total_count = $row['total_count'];
}


?>
            <div class="card">
                <center>
                    <h3 class="cus">CUSTOMER</h3><br>
                    <i class="fa-solid fa-user fa-xl" style="color: #285138;"></i>
                    <p><?php echo($total_customer) ?></p>
                </center>
            </div>
            
            <div class="card">
                <center>
                    <h3 class="twh">TWO WHEELER</h3><br>
                    <i class="fa-solid fa-motorcycle fa-xl" style="color: #285138;"></i>
                    <p><?php echo($total_two) ?></p>
            </div>
            </center>
            <div class="card">
                <center>
                    <h3 class="fwh">FOUR WHEELER</h3>
                    <br>
                    <i class="fa-solid fa-car fa-xl" style="color: #285138;"></i>
                    <p><?php echo($total_four) ?></p>
                </center>
            </div>
            <div class="card">
                <center>
                    <h3 class="bking">BOOKING</h3>
                    <br>
                    <i class="fa-solid fa-circle-check fa-xl" style="color: #285138;"></i>
                    <p><?php echo($total_count) ?></p>
                </center>
            </div>

        </div>
    </div>
    </div>
</body>

</html>
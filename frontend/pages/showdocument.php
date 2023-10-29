<?php
include "../../backend/config.php";
$viewDocument = $_GET['license'];

$sql = "select file_uoloads from rent where rental_id = '$viewDocument'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $license = $row['file_uoloads'];
    

}
?>
<style>
    .image{
        height: 285px;
        width: 52%;
       
        margin-left: 200px;
        margin-top: 50px;
        box-shadow: 1px 1px 1px;
    }
</style>

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
    <title>View Document</title>
    <link rel="stylesheet" href="../assets/css/vehiclemngmnt.css?v=1">
    <link rel="stylesheet" href=//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>
    <style>
    <?php include "../assets/css/vehiclemngmnt.css" ?> 
    <?php include "../assets/css/rentalmanagent.css" ?> 
    </style>
</head>

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
                    <a href="#">
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

        <div class="right-section" style="height: 80vh;">
    <div class="image"><img src="../assets/license_upload/<?php echo($license) ?>" alt="" width="500"></div>
</body>
</html>
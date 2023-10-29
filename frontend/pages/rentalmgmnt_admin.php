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
    <title>Admin Rental Mngmnt</title>
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
            
            


            <h1 class="vtext">Rental Information!</h1>
            <center>
                <div class="tab" style="height:70vh;">
                    <table border="1">
                 <tr>
                        <th>S.N</th>
                        <th>Customer Name</th>
                        <th>Vehicle Name</th>
                        <th>Vehicle Status</th>

                        <th>Pickup Date</th>
                        <th>Pickup Time</th>
                        <th>Drop off Date</th>
                        <th>Drop off time</th>
                        <th>View Document</th>
                        <th>Rental Status</th>
                        <th>Payment Due Amount</th>
                        <th>Payment Status</th>
                        <th>Terms and Condition</th>
                        <th>Change Rental status</th>
                        <th>Change Payment Status</th>
                        <th> Approve Returned Vehicle </th>
                    </tr>
                    <?php
                    
                    
                    include '../../backend/functions/showRentalDetails.php';
                    $i=1;

                    while($row=mysqli_fetch_assoc($result)){?>
                    <?php
                    $rental_id = $row['rental_id'];
                    $payment_id = $row['payment_id'];
                    $vehicle_id=$row['vehicle_id'];
                    ?> 
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['customer_name'] ?></td>
                        <td><?php echo $row['vehicle_name']?></td>
                        <td><?php echo $row['vehicle_status']?></td>
                        <td><?php echo $row['start_date'] ?></td>
                        <td><?php echo $row['pickup_time'] ?></td>
                        <td><?php echo $row['end_date']   ?></td>
                        <td><?php echo $row['dropoff_time'] ?></td>
                        <td><a href="showdocument.php?license=<?php echo($rental_id)?>"> View Documents</a>
                        </td>
                        <td><?php echo $row['rental_status'] ?></td>
                        <td><?php echo $row['payment_amount']  ?></td>
                        <td><?php echo $row['payment_status'] ?></td>

                        <td><?php echo $row['terms_condition'] ?></td>
                        <td><a href="../../backend/functions/rental_status_chng.php?rental_id=<?php echo($rental_id)?>&vehicle_id=<?php echo($vehicle_id)?>" class="approvebtn" <?php if($row['rental_status']=='Rejected'||$row['rental_status']=='Cancelled'){?>hidden <?php } ?>> Approve</a><br><br>


                        <a href="../../backend/functions/rental_reject.php?rental_id=<?php echo($rental_id)?>&vehicle_id=<?php echo($vehicle_id)?>" class="rejectbtn">Reject</a></td>

                        <td><a href="../../backend/functions/payment_status_chng.php?payment_id=<?php echo($payment_id)?>" class="approvebtn">Completed</a></td>

                        <td><a href="../../backend/functions/vehicle_status_chng.php?vehicle_id=<?php echo($vehicle_id)?>&rental_id=<?php echo($rental_id)?>" class="approvebtn">Returned</a></td>
                    </tr>
             
                    <?php
                    $i++;
                    }?>

                    
                    

                    </table>
            </center>

        </div>
        <script src="../assets/js/index.js"></script>
</body>

</html>
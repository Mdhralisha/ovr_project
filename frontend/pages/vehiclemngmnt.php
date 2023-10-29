<?php
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:admin_login.php');
}
if(isset($_GET['status'])){?>
<script>alert("Ngative Price Cannot Be Inserted")</script>
<?php
}
if(isset($_GET['del_status'])){?>
    <script>alert("Deletion failed, linked with another table")</script>
    <?php
    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Vehicle Mngmnt</title>
    <link rel="stylesheet" href="../assets/css/vehiclemngmnt.css?v=1">
    <link rel="stylesheet" href=//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>
    <style>
    <?php include "../assets/css/vehiclemngmnt.css" ?> 
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
                    <a href="#">
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
            <button class="btn" id="add_vehicle" onclick="add_vehicle()">ADD NEW VEHICLES</button>
            <div class="vedisplayform" id="vehicle_entry">

                <div class="insideform">
                    <h3 class="vehicle_entry_head">Vehicle Entry Form</h3>
                    <h3 class="close_butn" onclick="close_butn()">X</h3>
                </div>

                <div class="vform">
                    <form action="../../backend/functions/addvehicles.php" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Enter Vehicle Name" class="vname" name=vname required>
                        <input type="number"  placeholder="Price per day" class="vehicle_input" name="price" required>
                        <select name="vehicle_category" class="vehicle_input" required>
                        <?php include "../../backend/config.php"; ?>
                        <?php include "../../backend/functions/showCategory.php" ?>
                        <?php
                    
                        while($row=mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo($row['category_id'])?>"><?php echo($row['category_name'])?></option>
                        <?php
                        }
                        ?>
                        </select>
                        <input type="text" placeholder="Brand" class="vehicle_input" name="brand" required>
                        <input type="text" placeholder="Color" class="vehicle_input" name="color" required>
                        <select class="vehicle_input" name="vehicle_status">
                            <option value="Select Status" Default>Select Status</option>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                            <option value="On Rent">On Rent</option>
                        </select>
                        <select class="vehicle_input" name="condition">
                            <option value=" Vehicle Condition" Default>Select Condition</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="On Maintenance">On Maintenance</option>
                        </select>
                       <br><br>
                        <label>Upload Image</label>  <input type="file" name="vehicle_image" required>
                        <br><br>
                         <input type="submit" value="Save" name="submit" class="butn">
                    </form>
                </div>
            </div>


            <h1 class="vtext">Vehicle Information!</h1>
            <center>
                <div class="tab">
                    <table border="1">
                 <tr>
                        <th>ID</th>
                        <th>Vehicle Name</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Color</th>
                        <th>Condition</th>
                        <th>Price per day</th>
                       
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include '../../backend/config.php';
                    
                    include '../../backend/functions/showvehicles.php';
                

                    while($row=mysqli_fetch_assoc($result)){
                    $vehicle_id=$row['vehicle_id'];
                    ?>
                    
                    <tr>
                        <td><?php echo ($row['vehicle_id']); ?></td>
                        <td><?php echo($row['vehicle_name']); ?></td>
                        <td><?php echo($row['vehicle_brand']); ?></td>
                        <td><?php echo($row['category_name']); ?></td>
                        <td><?php echo($row['color']); ?></td>
                        <td><?php echo($row['vehicle_condition']); ?></td>
                        <td><?php echo($row['hourly_rate']); ?></td>
                        <td><?php echo($row['vehicle_status']); ?></td>
                        <td><a href="editvehicle.php?vehicle_id=<?php echo($vehicle_id) ?>"><img src="../assets/images/edit.png" width="20" height="20"></a>
                         <a href="../../backend/functions/delete.php?id=<?php  echo($row['vehicle_id']);?>"><img src="../assets/images/delete.png" width="20" height="20"></a></td> 
                       
                    </tr>
                    <?php
                  
                    }?>

                    
                    

                    </table>
            </center>

        </div>
        <script src="../assets/js/index.js"></script>
        
</body>

</html>
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
    <title>Category</title>
    <link rel="stylesheet" href="../assets/css/vehiclemngmnt.css?v=1">
    <link rel="stylesheet" href=//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>
    <style>
        <?php include "../assets/css/category.css" ?>
    </style>
</head>

<body>
    <div class="admin-dashboard-header">
        <div class="page-heading">
        <a href="admin_dashboard.php" class="vr">Vehicle Rental</a>
        </div>
        <div class="greet-section">
            Welcome<?php echo($_SESSION['admin_name']) ?>
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
                    <a href="#">
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
            <button class="btn" id="add_vehicle" onclick="add_category()">ADD NEW CATEGORY</button>
            <div class="categoryform" id="category_entry">

                <div class="insideform">
                    <h3 class="category_entry_head">Category Entry Form</h3>
                    <h3 class="close_btn" onclick="close_btn()">X</h3>
                </div>

                <div class="cform">
                    <form action="../../backend/functions/addcategory.php" method="post">
                        <input type="text" placeholder="Category Name" class="cname" name="category_name">
                        <br>
                        <input type="submit" value="Save" class="butn" name="submit">
                    </form>
                </div>
            </div>


            <h1 class="vtext">Category Information!</h1>
            <center>
                <div class="tab">
                    <table border="1">
                        <tr>
                            <th>S.N</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        <?php include "../../backend/config.php"; ?>
                        <?php include "../../backend/functions/showCategory.php" ?>
                        <?php
                        $i = 1;
                        while($row=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo($i) ?></td>
                            <td><?php echo($row['category_name'])?></td>
                            <td><a href="editcategoy.php?category_id=<?php echo($row['category_id']) ?>"><img src="../assets/images/edit.png" width="20" height="20"></a></td>
                            
                           


                        </tr>
                        <?php
                        $i++;
                        }

                        ?>



                    </table>
            </center>

        </div>
        <script>
            <?php include "../assets/js/index.js" ?>
        </script>
</body>

</html>
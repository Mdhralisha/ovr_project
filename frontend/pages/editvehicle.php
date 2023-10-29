<?php include "../../backend/config.php"; 
 $vehicle_id =$_GET['vehicle_id'];
 $sql2= "select * from vehicle where vehicle_id='$vehicle_id'";
 $query=mysqli_query($conn,$sql2);
 while($row2=mysqli_fetch_assoc($query)){
     $vehicle_name = $row2['vehicle_name'];
     $vehicle_status = $row2['vehicle_status'];
     $hourly_rate = $row2['hourly_rate'];
     $vehicle_brand = $row2['vehicle_brand'];
     $color = $row2['color'];
     $vehicle_condn = $row2['vehicle_condition'];
     $vehicle_image = $row2['vehicle_image'];
     $category_id = $row2['category_id'];
   
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vehicle</title>
    <link rel="stylesheet" href="../assets/css/editform.css">
   
</head>
<body>

          <div class="main">
            <div class="insideform">
            <h3 class="vehicle_entry_head">Update Vehicle Entry Form Data</h3>
                   

            </div>
            <div class="editform">
                <form action="../../backend/functions/editVehicleData.php" method="post" enctype="multipart/form-data">
                    <input type="text" value="<?php echo($vehicle_id) ?> " name="vehicle_id" hidden>
                <input type="text" placeholder="Enter Vehicle Name" class="vname" name=vname value="<?php echo($vehicle_name) ?>"><br><br>
                <input type="number" placeholder="Price per day" class="vehicle_input" name="price" value="<?php echo($hourly_rate) ?>">
                <select name="vehicle_category" class="vehicle_input"  ?>">
                        
                        <?php include "../../backend/functions/showCategory.php" ?>
                        <?php
                   
                        while($row=mysqli_fetch_assoc($result)) { ?>
                        
                            <option value="<?php echo($row['category_id'])?>"><?php echo($row['category_name'])?></option>
                        <?php
                        }
                        ?>
                        </select><br>
                        <input type="text" placeholder="Brand" class="vehicle_input1" name="brand" value="<?php echo($vehicle_brand) ?>">
                        <input type="text" placeholder="Color" class="vehicle_input1" name="color" value="<?php echo($color) ?>"><br><br>
                        <select class="vehicle_input" name="vehicle_status" value="<?php echo($vehicle_status) ?>">
                            <option value="Select Status" Default>Select Status</option>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                            <option value="On Rent">On Rent</option>
                        </select>
                        <select class="vehicle_input" name="condition" value="<?php echo($vehicle_condn) ?>">
                            <option value=" Vehicle Condition" Default>Select Condition</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="On Maintenance">On Maintenance</option>
                        </select>
                       <br><br>
                        <label class="label">Upload Image</label>  <input type="file" name="vehicle_image" value="<?php echo($vehicle_image) ?>">
                        <br><br>
                         <input type="submit" value="Save Changes" name="submit" class="butn">


                </form>
            </div>

        
          </div> 
          <script src="../assets/js/index.js"></script>

                
                    
</body>
</html>
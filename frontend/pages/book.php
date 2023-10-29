<?php
session_start();
if(isset($_SESSION['customer_name'])){
    include "../layouts/navbar.php";
}else{
    include "../layouts/before_login_nav.php";
}
if(isset($_GET['status'])){
    echo('<script>alert("vehicle not available")</script>');
}


?>
<?php
include "../../backend/config.php";
include "../../backend/functions/showvehicledetails.php";
?>
<style>
        <?php include "../assets/css/book.css";?>
    </style>
    <br><br><br><br><br><br><br>
    <div class="main"><?php
    while($row=mysqli_fetch_assoc($result)){
        $vehicle_id=$row['vehicle_id'];
        $vehicle_rate = $row['hourly_rate'];
        ?>
    
    <div class="img">
        <img src="../assets/uploads/<?php echo $row['vehicle_image'];?>"width="450" height="350">
    </div>
<div class="text">
    <h1><?php echo $row['vehicle_name'];?></h1>
    <pre>
    <div class="detailss">
      Category:  <?php echo($row['category_name']); ?><br>
      Brand:  <?php echo($row['vehicle_brand']);?><br>
      Color:  <?php echo ($row['color']);?><br>
      Vehilce Status:  <?php echo ($row['vehicle_status']);?><br>
      Vehicle Condition:  <?php echo ($row['vehicle_condition']);?><br>
      Price per day:  <span style="color: red;"><?php echo ( "Rs". " " .$row['hourly_rate']);?></span>
</div>
    </pre>



    <?php 
    if(isset($_SESSION['customer_name'])){
    echo('<a href="bookingform.php?vehicle_id='.($vehicle_id).'&vehicle_rate='.$vehicle_rate.'"><input type="button" value="Book Now" class="bookbtn"></a>');
    
    }else{
echo('<a href="customer_login.php"><input type="button" value="Book Now" class="bookbtn"></a>');


    }
    ?>
        
    <!-- <a href="bookingform.php?vehicle_id=<?php // echo ($row['vehicle_id']) ?>"><input type="button" value="Book Now" class="bookbtn"></a> -->
</div>

    </div>
    


<?php
    }
    ?>

    <script src="../assets/js/navbarjs.js"></script>
   
</body>
</html>


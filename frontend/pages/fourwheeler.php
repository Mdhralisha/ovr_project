<?php
session_start();
if(isset($_SESSION['customer_name'])){
    include "../layouts/navbar.php";
}else{
    include "../layouts/before_login_nav.php";
}


?>
<style>
        <?php include "../assets/css/fourwheeler.css";?>
    </style>
    <br><br><br><br><br><br><br>

    <div class="main">
        <div class="slider" id="slider">
            <img src="../assets/images/Nissan-Magnite.jpg" height="300">

        </div>
        <h1 class="avfw">Available Four Wheeler Vehicles</h1>
        <!-- <i class="fa-solid fa-car fa-2xl" style="color: #285138;"></i> -->
        

        <div class="productdisplay" style="overflow-y: scroll;">
        <?php
            include "../../backend/config.php";
            include "../../backend/functions/showfourwheeler.php";
            while($row=mysqli_fetch_assoc($result)){
                $db_vehiclename = $row['vehicle_name'];
                $db_price= $row['hourly_rate'];
                $db_vehiclestatus= $row['vehicle_status'];
                $db_vehicleimag=$row['vehicle_image'];  ?>
                        
        <div class="card">
        <a href="book.php?vehicle_id=<?php echo $row['vehicle_id']?>" class="four_detals_a"> 
            <div class="card1">
            <img src="../assets/uploads/<?php echo $db_vehicleimag;?>" alt="" width="90%" height="120px">
            </div>
            <div class="card2">
            <center>    
                    <h4><?php echo $db_vehiclename ?></h4>
                    <p><?php echo $db_vehiclestatus ?></p>
                    <p style="color: red;"><?php echo "Rs". " ". $db_price ?></p>
               </center>
            </div></a> 
        </div>
        <?php
            }
        ?>

     
       
   

    </div>
    <br><br><br><br>
<div class="footer">
    <div><a href="https://www.facebook.com/"><img src="../assets/images/fb.png" width="60rem" height="60px" class="fb"></a>
        <a href="https://www.instagram.com/"><img src="../assets/images/insta.jpeg" width="60rem" height="60px" class="insta"></a>
        <a href="https://mail.google.com/"><img src="../assets/images/mail.png" width="60rem" height="70px" class="mail"></a>
        <p class="copy">copyright© All Rights Reserved by Alisha Manandhar, Bhaktapur</p>
        
    </div>
   
    


</div>
    
    
    
    <script src="../assets/js/navbarjs.js?v=1"></script>
    <script><?php include "../assets/js/index.js" ?></script>
   
</body>
</html>
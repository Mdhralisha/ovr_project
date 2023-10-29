<?php include "../layouts/before_login_nav.php" ?>
    <div class="main">
        <b><h1>Welcome To Vehicle Rental Website!!!</h1></b>
        <p>This website is for bookings only you can book vehicle of your choice...</p>
        <br><br>
        <center><img src="../assets/images/carss.png" class="img"></center>


    </div>
    <center>
    <?php
include "../../backend/functions/cusdashbeflogin.php";
while($row=mysqli_fetch_assoc($result)){
    $total_customer = $row['total_customer'];
}
while($row=mysqli_fetch_assoc($result2)){
    $total_two = $row['total_two'];
}
while($row=mysqli_fetch_assoc($result3)){
    $total_four = $row['total_four'];
}



?>
    <div class="main-dashboard">
        <div class="customer"> <h3 class="cus">CUSTOMER</h3><br>
            <i class="fa-solid fa-user fa-xl" style="color: #285138;"></i><br>
             <p class="space"><?php echo($total_customer) ?></p>
        </div>
        <div class="four">
        <h3 class="twh">TWO WHEELER</h3><br>
        <i class="fa-solid fa-motorcycle fa-xl" style="color: #285138;"></i>
        <p><?php echo($total_two) ?></p>
        </div>
        <div class="two"> <h3 class="fwh">FOUR WHEELER</h3>
        <br>
        <i class="fa-solid fa-car fa-xl" style="color: #285138;"></i>
        <p><?php echo($total_four) ?></p>
    </div>
        <div class="booking"> <h3 class="bking">BOOKING</h3>
        <br>
        <i class="fa-solid fa-circle-check fa-xl" style="color: #285138;"></i>
        </div>
    </div>
</center><br><br>
<center><h2 class="feature">Featured Products</h2></center>
<div class="main2">
<?php
    include "../../backend/functions/showFeatureProducts.php";
    while($row = mysqli_fetch_assoc($result)){?>
<div class="car" style="height: 40rem;">
       <center> <div><img src="../assets/uploads/<?php echo($row['vehicle_image']) ?>" width="80%" height=170px class="imgc"></div></center>
       <center> <div ><h2 class="text"><?php echo($row['vehicle_name']) ?></h2></div></center><br>
       <div class="prices"><b>
        <p>Price per day: <?php echo($row['hourly_rate']) ?></p>
        <p class="category">Category:<?php echo($row['category_name']) ?></p>
        <p class="brand">Brand: <?php echo($row['vehicle_brand']) ?></p>
        <p class="color">Color: <?php echo($row['color']) ?>  </p>
        <p class="vstatus">Vehicle status:<?php echo $row['vehicle_status'] ?></p>
        <p class="vcondn">Vehicle condition: <?php echo($row['vehicle_condition']) ?> </p>
        </b>
     
           

    
    </div>
    </div>


<?php
    }
    
    ?>
    <!-- <div class="bike">
       <center><div><img src="../assets/uploads/Duke-Bike.png" width="80%" height=170px class="imgc"></div></center>
        <center><div><h2 class="text">KTM DUKE 200CC</h2></div></center><br>
        <div class="prices"><b>
            <p>Price per hour:</p>
            <p class="category">Category:</p>
            <p class="brand">Brand:</p>
            <p class="color">Color:</p>
            <p class="vstatus">Vehicle status:</p>
            <p class="vcondn">Vehicle condition:</p>
            </b>
            <br><br><br><br>
            <input type="submit" value="BOOK" class="submit">

        
        </div>
        
    </div>
    <div class="van">
        <center><div><img src="../assets/uploads/van.png" width="80%" height=170px class="imgc"></div></center>
        <center><div><h2 class="text">ECO VAN</h2></div></center><br>
        <div class="prices"><b>
            <p>Price per hour:</p>
            <p class="category">Category:</p>
            <p class="brand">Brand:</p>
            <p class="color">Color:</p>
            <p class="vstatus">Vehicle status:</p>
            <p class="vcondn">Vehicle condition:</p>
            </b>
            <br><br><br><br>
            <input type="submit" value="BOOK" class="submit">

        
        </div>
    </div> -->
</div><br><br><br><br>
<div class="footer">
    <div><a href="https://www.facebook.com/"><img src="../assets/images/fb.png" width="60rem" height="60px" class="fb"></a>
        <a href="https://www.instagram.com/"><img src="../assets/images/insta.jpeg" width="60rem" height="60px" class="insta"></a>
        <a href="https://mail.google.com/"><img src="../assets/images/mail.png" width="60rem" height="70px" class="mail"></a>
        <p class="copy">copyright© All Rights Reserved by Alisha Manandhar, Bhaktapur</p>
        
    </div>
   
    


</div>
<script>


const categoryy = document.querySelector("#categoryy");
const categor = document.querySelector(".category");
const categorId = document.querySelector("#categor");

  function  showMenu(){
    // e.preventDefault()
    // categorId.className = 'show'


    if (categorId.className === 'hide') {
        categorId.className = 'show'
    }else{
    categorId.className = 'hide'

    }
    console.log('hello')
    console.log(categor, 'categor')
    console.log(categoryy, 'categoryy')
  }
</script>

</body>
</html>
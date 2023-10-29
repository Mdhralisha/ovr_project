<?php
session_start();
if(!isset($_SESSION['customer_id'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After LOgin Customer Dashboard</title>
    <script src="../assets/js/jquery.js" ></script>
    <!-- <link rel="stylesheet" href="../assets/css/customerdashboard.css?v=1"> -->
    <link rel="stylesheet" href=//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    
    <?php include "../assets/css/customerdashboard.css" ?>
    body{
        background-color: rgb(239, 229, 229);
        margin: 0px;
        padding: 0px;
    }
    nav{
        width: 100%;
        height: 40px;
        border: 1px solid black;
        background-color: rgb(40, 81, 56);
    }
    .srch{
        width: 40%;
        margin-top: 10px;
        margin-left: 20px;
    }
    nav a{
        padding: 20px;
        margin-top: 10px;
        text-decoration: none;
        color: white;
        margin-left: 20px;
    }
    .snd{
        background-color: rgb(239, 248, 241);
        width: 100%;
        height: 50px;
       
    
    }
   .snd a{
        color: black;
        text-decoration: none;
      
        padding:20px;
      
        
        
       
    }
    

    
    .main{
        width: 100%;
        height: 600px;
        background-color: rgb(239, 229, 229);
        margin-top: -20px;
    }
    h1{
       
        color: rgb(71, 10, 81);
        text-align: center;
        padding-top: 20px;
        font-family: 'Opens Sans',sans-serif;
    }
    p{
        text-align: center;
        
      
    }
    .img{
        width: 80%;
    }
    .navi{
        float: right;
        margin-top: 15px;
    }
    .reg{
        float: right;
        margin-top: 10px;
    } 
    .main-dashboard{
        display: flex;
        margin: 2rem;
        justify-content: space-around;
    }
    .customer{
        height: 12rem;
        width: 20%;
        background: #FFFFFF;
        border: 3px solid #285138;
        border-radius: 8px;
        
    }
    .two{
        height: 12rem;
        width: 20%;
        background: #FFFFFF;
        border: 3px solid #285138;
        border-radius: 8px;
        
    }
    .four{
        height: 12rem;
        width: 20%;
        background: #FFFFFF;
        border: 3px solid #285138;
        border-radius: 8px;
    }
    .booking{
        height: 12rem;
        width: 20%;
        background: #FFFFFF;
        border: 3px solid #285138;
        border-radius: 8px;
    }
    .cus{
        color:rgb(40, 81, 56);
      
    }
    .twh{
        color:rgb(40, 81, 56);

    }
    .fwh{
        color:rgb(40, 81, 56);

    }
    .bking{
        color:rgb(40, 81, 56);


    }
    .greet_user{
        color: #fff;
        margin-left: 1rem;
        margin-top: 10px;
        
    }
    .navbar-top{
    display: flex;

    }
    .logout {
        margin-top: 10px;
        margin-left: 90px;



        
    }
    


    /* hover menu */
   a.hover-menu{
    /* background-color: red; */
    cursor: pointer;
    position: relative;
   }
.categor{
    /* display: none; */
    /* position: absolute; */
    
    top: 0;
    right: 0;
}
.categor li{
    list-style-type: none;
}

    
a{
    text-decoration: none;
}
   
   .hide{
    display: none;
   }

   .show{
    display: none;
    background-color: lightblue;
    width: 90px;
    position: absolute;
    padding: 10px 20px;
    right: 0;
    border-radius: 10px;
    
    
   }
   .srchbtn{

    border-radius: 5px;
   }
   .searching{
    width: 60%;

   }
   .space{
    margin-top: -22px;
   }

   
    
</style>
</head>
<body>
    <?php
    if(isset($_GET['status'])){
    $status=$_GET['status'];
    if($status=="Success"){
        echo("<script>alert('Vehicle Booked Successfully')</script>");
    }}
    
    ?>

<?php
include "../../backend/functions/showcusdatadashboard.php";
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
    $total_booking = $row['total_booking'];
}


?>
    <nav>
        <div class="navbar-top">
            <form action="searchresult.php" class="searching" method="post">
                <input type="text" placeholder="Search" class="srch" name="search" >
                <input type="submit" value="search" class="srchbtn">
            </form>

            <!-- <div class="searching">
                <input type="text" placeholder="Search" class="srch" id="search">
                <input type="submit" value="Search" id="searchBtn">

</div> -->
         
       <div class="greet_user">
       <a href="../pages/cusedit.php">
        Welcome <?php
         echo " ".($_SESSION['customer_name'])?>
         </a>
        </div>
        <div class="logout">
        <a href="customer_login.php">Log Out</a></div>
        </div>
    </nav>
    <div class="snd">
        <img src="../assets/images/carblogo.png" width="7%">
        <div class="navi">
        <a href="customerdashboard.php">Home</a>
      
        <a href="contact.php">Contact</a>
        <a href="cus_rent_report.php">Rental Report</a>

        <a  id="categoryy"  class="hover-menu">Categories</a>
    </div>

    </div>
    <div id='categor' class="show">
        <!-- <li> -->
        <a href="fourwheeler.php">Four Wheeler</a><div class="hr"><hr></div>
        <a href="twowheeler.php">Two Wheeler</a>
        <!-- </li> -->
    </div>
    <div class="main">
        <b><h1>Welcome To Vehicle Rental Website!!!</h1></b>
        <p>This website is for bookings only you can book vehicle of your choice...</p>
        <br><br>
        <center><img src="../assets/images/carss.png" class="img"></center>


    </div>
    <center>
    <div class="main-dashboard">
        <div class="customer"> <h3 class="cus">CUSTOMER</h3><br>
            <i class="fa-solid fa-user fa-xl" style="color: #285138;"></i>
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
        <p><?php echo($total_booking)?></p>
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
        <p class="vstatus">Vehicle status:<?php echo($row['vehicle_status']) ?></p>
        <p class="vcondn">Vehicle condition: <?php echo($row['vehicle_condition']) ?> </p>
        </b>
     
           

    
    </div>
    </div>


<?php
    }
    
    ?>
    
  
</div><br><br><br><br>
<div class="footer">
    <div><a href=""><img src="../assets/images/fb.png" width="60rem" height="60px" class="fb"></a>
        <a href=><img src="../assets/images/insta.jpeg" width="60rem" height="60px" class="insta"></a>
        <a href=><img src="../assets/images/mail.png" width="60rem" height="70px" class="mail"></a>
        <p class="copy">copyright© All Rights Reserved by Alisha Manandhar, Bhaktapur</p>
        
    </div>
   
    


</div>


<script src="../assets/js/jquery.js"></script>
<script>

$(document).ready(function(){
    $('#categoryy').click(function(){
        $('#categor').toggle();
    })
})

</script>
</body>
</html>
    
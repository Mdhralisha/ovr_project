 <?php
include "../../backend/config.php";

$searchData = $_POST['search'];
$sql="SELECT * FROM vehicle where vehicle_name like '%$searchData%'";
$result=mysqli_query($conn,$sql);


?>


<?php
session_start();
if(isset($_SESSION['customer_name'])){
    include "../layouts/navbar.php";
}else{
    include "../layouts/before_login_nav.php";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../assets/js/jquery.js"></script>
    <title>Search Result</title>
</head>
<style>
<?php
include "../assets/css/searchresult.css";
?>
</style>
<body>
   
<style>
    .insidemain{
        display: flex;
        width: 100%;
        height: 60vh;
        flex-wrap: wrap;
        background-color: white;
        justify-content:space-around;
        overflow-y: scroll;

    }
    .imag{
        width: 80%;
        height: 120px;
        margin-left: 20px;
        margin-top: 10px;
    }
</style>
   <div class="main">
   <center> <h1 style="color: green;" class="search"> SEARCH RESULTS!!!</h1></center>
   <div class="insidemain">
   <?php
         while($row=mysqli_fetch_assoc($result)){
            $vehicle_name=$row["vehicle_name"];
            $vehicle_status=$row["vehicle_status"];
            $perdayrate=$row["hourly_rate"];
            $vehicle_image=$row["vehicle_image"];
            ?>
    <div class="card1">
        <a href="book.php?vehicle_id=<?php echo $row['vehicle_id']?>"> 
        <div class="card_img">
        <img src="../assets/uploads/<?php echo $vehicle_image;?>" alt="" class=imag>
        </div>
        <div class="car_details">
        <center>    
                    <h4><?php echo $vehicle_name ?></h4>
                    <p><?php echo $vehicle_status ?></p>
                    <p style="color: red;"><?php echo "Rs"." ". $perdayrate ?></p>
                </center>
        </div>
    </div>
</a>  
<?php } ?>
    
   

   </div>
 
   </div>


        
        
        
        
       


    
 

  

    
   
   <script><?php include "../assets/js/index.js" ?></script>
    <script src="../assets/js/navbarjs.js"></script>
</body>
</html>
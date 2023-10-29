<?php
include "../../backend/config.php";
$vehicle_id = $_GET['vehicle_id'];
$sql_query="select * from vehicle where vehicle_id=$vehicle_id";
$response = mysqli_query($conn,$sql_query);
while($row2 = mysqli_fetch_assoc($response)){
    $vehicle_status = $row2['vehicle_status'];
    if($vehicle_status!="Available"){
        header('location:book.php?vehicle_id='.($vehicle_id).'&status="failed"');
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <!-- <link rel="stylesheet" href="../assets/css/bookingform.css?v=1"> -->
    <style><?php include "../assets/css/bookingform.css"?></style>
</head>
<body>
    <div class="forms">
    <h1 class="head"> Booking Form </h1>
    <form action="../../backend/functions/bookvehicle.php" class="formquery" method="post" enctype="multipart/form-data">
        <?php
        session_start();
        $vehicle_rate = $_GET['vehicle_rate'];
        
        
        ?>
        <input type="number" name="vehicle_rate" value="<?php echo($vehicle_rate) ?>" id="" hidden>
        <input type="number" value="<?php echo($vehicle_id) ?>" name="vehicle_id" hidden>
        <input type="text" value="<?php echo($_SESSION['customer_id']) ?>" hidden name="cid">
        <input type="text" name="rental_status" value="pending" hidden>
        <input type="text" placeholder="Location" class="locs" name="location" required>
        <input type="number" placeholder="renting period in days" name="rentingperiod" class="period" required>
        <br><br><br>
        <input type="date" placeholder="Pickup Date" class="pick" name="pdate"required> 
        <input type="text" placeholder="Pickup Time" class="time" name="ptime" required ><br><br><br>
        <input type="date" placeholder="DropOff Date" class="pick" name="ddate" required>
        <input type="text" placeholder="DropOff Time" class="time" name="dtime" required><br><br><br>
        <label >Upload License</label>
        <input type="file" name="license" required>
        <h3 style="text-align:center;" class="terms">Terms & Conditions</h3>
        <div class="list" style="width: 90%;">
    <ul type="square">
        <li>Copy of Citizenship and license must be provided.</li><br>
        <li> If the vehicle is not returned in time according to the contract. Legal actions will be taken with penalties</li><br>
        <li>If the vehicle is damaged the customer himself will have to pay for the maintainence</li>
       
    </ul>
</div>
<div class="termstext"><input type="checkbox" name="check" value="agreed" required>I accept all the terms and condition</div>

<!-- <input type="submit" value="Confirm" class="confirm" > -->

<button class="submit" id="submit_form"  name="submit">Submit</button>
</form>
</div>
<!--
</div>
    </div>
       <div class="termsdisplay" id="terms_check">

<div class="insidebox" id="insidebox">
    <h3 class="terms_head">Terms And Conditions</h3>
    <h3 class="close_butn" onclick="close_buttn()">X</h3> -->


 

    <script src="../assets/js/index.js?v=1"></script>
    
</body>
</html>
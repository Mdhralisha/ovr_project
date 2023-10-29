<?php 
session_start();
include "../layouts/navbar.php";
?>
<style>
    <?php include "../assets/css/vehiclemngmnt.css" ?>
    a.cancelbtn{
    text-decoration: none;
    width: 30%;
    height: 20px;
    border: 1px solid black;
    background-color: rgb(33, 74, 33);
    color: white;
    padding: 3px;
    border-radius: 5px;
    font-family: sans-serif;
    
}
.cancelbtn{
    margin-left: 20px;
}


a.approvebtn:hover{
    background-color: rgb(56, 83, 16);
}
</style>
<h1 class="vtext">Rental Information!</h1>
            <center>
                <div class="tab">
                    <table border="1">
                 <tr>
                        <th>S.N</th>
                        <th>Customer Name</th>
                        <th>Vehicle Name</th>
                        <th>Pickup Date</th>
                        <th>Pickup Time</th>
                        <th>Drop off Date</th>
                        <th>Drop off time</th>
                        <th>Rental Status</th>
                        <th>Payment Due Amount</th>
                        <th>Payment Status</th>
                        <th>Terms and Condition</th>
                        <th>Cancel Booking</th>
                        
                    </tr>
                    <?php
                    
                    
                    include '../../backend/functions/showRentalDetails.php';
                    $i=1;

                    while($row=mysqli_fetch_assoc($result)){?>
                    <?php
                    $rental_id = $row['rental_id'];
                    $payment_id = $row['payment_id'];
                    $customer_id = $row['customer_id'];
                    $vehicle_id=$row['vehicle_id'];
                    if($customer_id==$_SESSION['customer_id']){
                    ?> 
                    
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['customer_name'] ?></td>
                        <td><?php echo $row['vehicle_name']?></td>
                        <td><?php echo $row['start_date'] ?></td>
                        <td><?php echo $row['pickup_time'] ?></td>
                        <td><?php echo $row['end_date']   ?></td>
                        <td><?php echo $row['dropoff_time'] ?></td>
                        <td><?php echo $row['rental_status'] ?></td>
                        <td><?php echo $row['payment_amount']  ?></td>
                        <td><?php echo $row['payment_status'] ?></td>
                        <td><?php echo $row['terms_condition'] ?></td>
                        <td><br><a href="../../backend/functions/cancelVehicle.php?rental_id=<?php echo($rental_id)?>&vehicle_id=<?php echo($vehicle_id)?>" class="cancelbtn">Cancel</a><br><br>
                      
                    </tr>
             
                    <?php
                    $i++;
                    }
                    }?>

                    
                    

                    </table>
            </center>

        </div>

    
            <script src="../assets/js/navbarjs.js?v=1"></script>
    <script><?php include "../assets/js/index.js" ?></script>
        
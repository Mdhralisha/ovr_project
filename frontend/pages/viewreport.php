
<?php
include "../../backend/config.php";

$selectname=$_POST['selectname'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];

$query1 ="SELECT vehicle_name from vehicle where vehicle_id='$selectname'";
$query_result = mysqli_query($conn,$query1);
while($row=mysqli_fetch_assoc($query_result)){
    $vehicle_name = $row['vehicle_name'];
}

$sql="select start_date,end_date,customer_name,vehicle_name,rental_status,vehicle_status from rent join vehicle on rent.vehicle_id=vehicle.vehicle_id join customer on rent.customer_id=customer.customer_id where vehicle_name='$vehicle_name' and start_date between '$fromdate' and '$todate'";

$result=mysqli_query($conn,$sql);

?>
<style>
  
    <?php include("../assets/css/report.css") ?>
</style>
<h1 class="heading">Vehicle Report of <?php echo($vehicle_name) ?></h1><br>
<h3 class="subheading">As on <?php echo($fromdate) ?> to <?php echo($todate) ?></h3><br><br>

<div class="tablee">
<table border="1" class="table1">
    <tr>
        <th>Start Date</th>
        <th>End Date</th>
        <th>customer Name</th>
        <th>Vehicle Name</th>
        <th>Rental Status</th>
        <th>Vehicle Status</th>
    </tr>
<?php

while($row=mysqli_fetch_assoc($result)){?>
<tr>
<td><?php echo($row['start_date']);?></td>
<td><?php echo($row['end_date']);?></td>
<td><?php echo($row['customer_name']);?></td>
<td><?php echo($row['vehicle_name']);?></td>
<td><?php echo($row['rental_status']);?></td>
<td><?php echo($row['vehicle_status']);?></td>
</tr>


<?php
}
?>
</table>
</div>



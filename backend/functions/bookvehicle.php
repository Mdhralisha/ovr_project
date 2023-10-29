<?php
include "../config.php";
if(isset($_POST['submit'])){
    $vid=$_POST['vehicle_id'];
    $customerid=$_POST['cid'];
    $rstatus=$_POST['rental_status'];
    $location=$_POST['location'];
    $pickdate=$_POST['pdate'];
    $picktime=$_POST['ptime'];
    $dropdate=$_POST['ddate'];
    $droptime=$_POST['dtime'];
    $rentingperiod=$_POST['rentingperiod'];
    $vehicle_rate=$_POST['vehicle_rate'];

    $terms_conditions = $_POST['check'];
    $payment_amt = $vehicle_rate*$rentingperiod;



    $image_link=$_FILES['license'];
    $file_upload_path='../../frontend/assets/license_upload/';
    $file_name=$image_link['name'];
    $file_temp=$image_link['tmp_name'];
    $file=$file_upload_path.$file_name;
    
    if(move_uploaded_file($file_temp,$file)){
        echo"file uploaded";
    
    }else{
        echo "failed";
    }
    
    
        


    
    $sql="INSERT into payment(payment_type,payment_status,payment_amount) values ('cash','pending','$payment_amt')";
    $result=mysqli_query($conn,$sql);
    if($result){
    $query = "select payment_id from payment order by payment_id desc limit 1";
    $query_result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_result)){
        $db_payment_id = $row['payment_id'];
    }
        $sql2="INSERT INTO rent(rental_status, start_date,end_date,customer_id, vehicle_id,terms_condition,pickup_time,dropoff_time,payment_id, file_uoloads) values('$rstatus','$pickdate', '$dropdate', '$customerid', '$vid','$terms_conditions','$picktime','$droptime','$db_payment_id' ,'$file_name')";

        // $sql2 ="INSERT INTO `rent`( `rental_status`, `start_date`, `end_date`, `customer_id`, `vehicle_id`, `terms_condition`, `pickup_time`, `dropoff_time`, `payment_id`, `file_uoloads`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')"
echo($sql2);
        $result2= mysqli_query($conn,$sql2);

        if($result2){
            $sql_query = "update vehicle set vehicle_status='On Rent' where vehicle_id = '$vid'";
            $result_query = mysqli_query($conn,$sql_query);
            if($result_query){

                header("location:../../frontend/pages/success.php?status=Successlo");
            }
        }else{

            echo('failed');
        }
      }else{
        echo('failed2');
      }



    }
?>


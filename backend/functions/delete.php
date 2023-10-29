
        <?php
        include "../config.php";

        $id=$_GET['id'];

        $sql="DELETE FROM `vehicle` WHERE vehicle_id='$id'";




        $result=mysqli_query($conn,$sql);


 if($result){
  
 header("location:../../frontend/pages/vehiclemngmnt.php");
 }

 else{
  echo "deletion failed";
 header("location:../../frontend/pages/vehiclemngmnt.php?del_status='Failed'");

 }


?>

   

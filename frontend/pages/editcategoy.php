<?php
include "../../backend/config.php";
$category_id = $_GET['category_id'];
$sql = "SELECT * from categories where category_id = '$category_id'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $category_name = $row['category_name'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
  
</head>
<style>
    body{
        background-color: antiquewhite ;
    }
    .categform{
        height: 150px;
        width: 20%;
        border: 1px solid black;
        margin-left: 500px;
        margin-top: 100px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 1px 1px 1px;
    }
    .inside{
        height: 30px;
        width: 96%;
        border: 1px solid black;
        background-color:rgb(8, 51, 8);
        color: white;
        font-family: sans-serif;
        text-align: center;
        padding: 5px;
        
    }
    .inputc{
        margin-top: 10px;
        margin-left: 30px;
        height: 35px;
        width: 75%;
        border-radius: 6px;
        border: 1px green solid;
      
    }
    .save{
        height: 30px;
        width: 40%;
        border: 1px solid black;
        background-color:rgb(8, 51, 8);
        color: white;
        font-family: sans-serif;
        margin-left: 70px;
        font-family: sans-serif;
        border-radius: 8px;

    }

</style>
<body>
    <div class="categform">
        <form action="../../backend/functions/editcategory.php" method="post">
        <div class="inside"> Edit Category</div>
        <input type="text" name="category_id" value="<?php echo($category_id) ?>" hidden>
        <input type="text" name="category_name" placeholder="Category Name" class="inputc" value="<?php echo($category_name) ?>"><br><br>
        <input type="submit" value="Save Changes" class="save" name="savechanges">
        </form>
    </div>
    
</body>
</html>
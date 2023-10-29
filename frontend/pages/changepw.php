<?php   
if(isset($_GET['status'])){
    ?><script>
    alert("Passwrod Changed Successfully");
    </script>
    <?php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../assets/css/changepw.css">
</head>
<body>
    <h1>Change Password</h1>
    <div class="main">
        <form action="../../backend/functions/changeepw.php" method="post">
            <div class="insidemain">
            <input type="password" name="password" placeholder="Old Password" class="old"><br><br>
            <input type="password" name="new" placeholder="New Password" class="new"><br><br>
            <input type="password" name="confirm" placeholder="Confirm New Password" class="confirm">
<br><br>
            <input type="submit" name="submit" value="Save Password" class="save">
</div>

        </form>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <style>
        body {
            padding: 0px;
            margin: 0px;
            background-color: rgb(244, 238, 238);
        }

        .main-container {
            display: flex;
        }

        .left-container {
            background-color: black;
            width: 30%;
            height: 100vh;
        }



        .login-container {
            margin-top: 6rem;
            width: 60rem;
            height: 70vh;
            border-radius: 10px;
            position: absolute;
            display: flex;
            left: 9.75rem;
        }

        .inner-left-portion {
            width: 23.7%;
            height: 70vh;
            background-color: rgb(20, 20, 20);

        }

        .inner-right-portion {
            background-color: #B0C9B8;
            width: 73.25%;
            height: 70vh;
        }

        #login_image {
            margin-top: 3rem;
            position: absolute;
            left: -6rem;
        }

        .login-form {
            margin-left: 17rem;
            font-family: 'Opens Sans', sans-serif;
            margin-top: 6rem;
            width: 26rem;

        }

        input {
            height: 30px;
            width: 20rem;
            border-radius: 3px;
            border: none;
            margin-left: 20px;

        }

        .btn-success {
            width: 10rem;
            background-color: #0F381B;
            padding: 10px;
            color: white;
            border: none;
            font: bold;
            border-radius: 10px;
            height: 3rem;
        }
        .login_error{
            position: absolute;
            left:40rem;
            padding: 20px;
            color:white;
            border-radius: 10px;
            top:10px;
            font-family: sans-serif;
            background-color:rgb(221, 80, 96);;
        }
        .forget{
            margin-left: 200px;
            color:  #0F381B;
            opacity: 80%;
        }
    </style>
</head>

<body>
    <?php
    if(isset($_GET['status'])==1){?>
      <div class="login_error">
        Invalid Email or Password
      </div>
      <?php
    }
    
    ?>
    <div class="main-container">
        <div class="left-container"></div>
        <div class="right-container">
            <div class="login-container">
                <div class="inner-left-portion">
                    <img src="../assets/images/car.png" alt=" " id="login_image" height="400">
                </div>
                <div class="inner-right-portion">
                    <div class="login-form">
                        <center>
                            <h1 style="color:#414D38;">LOGIN HERE!!!</h1>
                        </center>
                        <form action="../../backend/functions/cuslogin.php" method="post">
                            <input type="email" name="user_email" value="" placeholder="EMAIL"><br><br>
                            <input type="password" name="password" placeholder="PASSWORD"><br><br>
    
                            <center><input type="submit" value="LOGIN" class="btn-success" name="login"></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After LOgin Customer Dashboard</title>
    <link rel="stylesheet" href="../assets/css/customerdashboard.css?v=1">
    <link rel="stylesheet" href=//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
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
        width: 60%;
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
        height: 10rem;
        width: 20%;
        background: #FFFFFF;
        border: 3px solid #285138;
        border-radius: 8px;
        
    }
    .two{
        height: 10rem;
        width: 20%;
        background: #FFFFFF;
        border: 3px solid #285138;
        border-radius: 8px;
        
    }
    .four{
        height: 10rem;
        width: 20%;
        background: #FFFFFF;
        border: 3px solid #285138;
        border-radius: 8px;
    }
    .booking{
        height: 10rem;
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
      margin-left: 17rem;
        margin-top: 10px;

        
    }
    .navbar-top{
    display: flex;

    }
    .logout {
        margin-top: 10px;
        /* margin-left: 30px; */



        
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
    display: block;
    background-color: lightblue;
    width: 90px;
    position: absolute;
    padding: 10px 20px;
    right: 0;
    border-radius: 10px;
    z-index: 5;
    
   }
   .searching{
    width: 60%;

   }
   .srchbtn{
    background-color: rgb(239, 229, 229);
    border-radius: 5px;
   }
   
</style>
</head>
<body>
    <nav>
        <div class="navbar-top">
        <form action="searchresult.php" class="searching" method="post">
        <input type="search" placeholder="Search" class="srch" name="search">
        <input type="submit" value="search" class="srchbtn">
        </form>
       <div class="greet_user" style="width: 30rem;">
        <a href="../pages/cusedit.php">
        Welcome <?php
         echo " ".($_SESSION['customer_name'])?>
         </a>
        </div>
        <div class="logout" style="width: 30rem;">
        <a href="../../backend/functions/logout.php">Log Out</a></div>
        </div>
    </nav>
    <div class="snd">
        <img src="../assets/images/carblogo.png" width="7%">
        <div class="navi">
        <a href="customerdashboard.php">Home</a>
        <a href="contact.php">Contact</a>
        <a href="cus_rent_report.php">Rental Report</a>
        <a  id="categoryy" onclick="showMenu()" class="hover-menu">Categories</a>
    </div>

    </div>
    <div id='categor' class="categor hide">
        <!-- <li> -->
        <a href="fourwheeler.php">Four Wheeler</a><div class="hr"><hr></div>
        <a href="twowheeler.php">Two Wheeler</a>
        <!-- </li> -->
    </div>
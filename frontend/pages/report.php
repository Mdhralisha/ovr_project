<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Report</title>
    <link rel="stylesheet" href="../assets/css/report.css">
    <script src="../assets/js/jquery.js"></script>
</head>
<body>
    
        <div class="main">
            <form action="viewreport.php" method="post">
                <div class="reportt">Report</div>

        <div class="inside">
            <label>Select Vehicle Name</label>
            <select name="selectname" class="selectname">
            </select><br><br>
            <label>From Date</label><br>
            <input type="date" class="fromdate" placeholder="From Date" name="fromdate"><br><br>
            <label>To Date</label><br>
            <input type="date" class="todate" placeholder="To Date" name="todate"><br><br>
            <input type="submit" value="Generate Report" name="report" class="report">
        </div>

</form>
        </div>


 <script>
    $(document).ready(function(){
        $.post(
            "../../backend/functions/showvehiclename.php",
            {},
            function(data,status){
                var vehicle_datas=JSON.parse(data);
                for(vehicle_data of vehicle_datas){
                    var vehicle_option = $(
                        "<option value="+vehicle_data.vehicle_id+">"+vehicle_data.vehicle_name+"</option>"
                    )
                    $('.selectname').append(vehicle_option);
                }
            }
        )
    })
 </script>   
</body>
</html>
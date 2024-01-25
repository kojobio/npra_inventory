<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/maintenance.css">
    <link rel="stylesheet" href="includes/css/dashboard.css">
    <title>Maintenance Info.</title>
</head>
<body>
    <nav>
        <a href="dashboard.php" >Home</a>
        <a href="maintenance.php" >Maintenance</a>
        <a href="distribution_table.php" >Distribution</a>
        <a href="technician.php" >Technician</a>
        <a href="asset.php" >Asset</a>
        <a href="profile.php"  style="float:right" >Profile</a>
    </nav>
    <form action="includes/maintenance.inc.php" method="post">
        <U><h2>MAINTENACE INFORMATION</h2></u>
        ASSET ID:<input type="text" name="ASSET_ID" id="ASSET_ID" required>
        TECHNICIAN ID:<input type="text" name="TECHNICIAN_ID" id="TECHNICIAN_ID"required>
        DATE OF MAINTENACE:<input type="date" name="DATE_OF_MAINTENACE" id="DATE_OF_MAINTENACE"required>
        MAINTENANCE TYPE:<input type="text" name="MAINTENANCE_TYPE" id="MAINTENANCE_TYPE"required>
        MAINTENANCE DISCRIPTION:<input type="text" name="MAINTENANCE_DISCRIPTION" id="MAINTENANCE_DISCRIPTION"required>
        COST OF MAINTENANCE:<input type="number" name="COST_OF_MAINTENANCE" id="COST_OF_MAINTENANCE"required>
        MAINTENANCE DURATION:<input type="text" name="MAINTENANCE_DURATION" id="MAINTENANCE_DURATION"required>
        MAINTENANCE STATUS:<input type="text" name="MAINTENANCE_STATUS" id="MAINTENANCE_STATUS"required>
        CREATED BY:<input type="text" name="CREATED_BY" id="CREATED_BY"required>
        MODIFIED BY:<input type="text" name="MODIFIED_BY" id="MODIFIED_BY"required>
        <input type="submit" Value="SUBMIT" class="submit-btn">
    </form>
    
</body>
</html>
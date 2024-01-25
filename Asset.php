<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/asset.css">
    <link rel="stylesheet" href="includes/css/dashboard.css">
    <title>Asset Info.</title>
</head>
<body>
    <nav>
        <a href="dashboard.php" >Home</a>
        <a href="maintenance.php" >Maintenance</a>
        <a href="distribution_table.php" >Distribution</a>
        <a href="technician.php" >Technician</a>
        <a href="asset.php" >Asset</a>
        <a href="profile.php"  class="Pro" style="float:right" >Profile</a>
    </nav>
    
    <form action="includes/Asset.inc.php" method="post">
        <u><h2>ASSET INFORMATION</h2></u>
        ASSET CODE: <input type="text" name="ASSET_CODE" id="ASSET_CODE"required>
        ASSET NAME: <input type="text" name="ASSET_NAME" id="ASSET_NAME"required>
        SERIAL NUMBER: <input type="text" name="SERIAL_NUMBER" id="SERIAL_NUMBER"required>
        DATE PURCHASED: <input type="date" name="DATE_PURCHASED" id="DATE_PURCHASED"required>
        LIFE SPAN: <input type="text" name="LIFE_SPAN" id="LIFE_SPAN"required>
        CURRENT LOCATION: <input type="text" name="CURRENT_LOCATION" id="CURRENT_LOCATION"required>
        CURRENT STATUS: <input type="text" name="CURRENT_STATUS" id="CURRENT_STATUS"required>
        ASSET CONDITION: <input type="text" name="ASSET_CONDITION" id="ASSET_CONDITION"required>
        COST OF ITEM: <input type="number" name="COST_OF_ITEM" id="COST_OF_ITEM"required>
        CREATED BY: <input type="text" name="CREATED_BY" id="CREATED_BY"required>
        MODIFIED BY: <input type="text" name="MODIFIED_BY" id="MODIFIED_BY"required>
        <input type="submit" value="SUBMIT"class="submit-btn">


    </form>

    
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/assets.css">
    <!-- <link rel="stylesheet" href="includes/css/dashboard.css"> -->
    <title>Asset Info.</title>
</head>

<body>
    <!-- <nav>
        <a href="dashboard.php" >Home</a>
        <a href="maintenance.php" >Maintenance</a>
        <a href="distribution_table.php" >Distribution</a>
        <a href="technician.php" >Technician</a>
        <a href="asset.php" >Asset</a>
        <a href="profile.php"  class="Pro" style="float:right" >Profile</a>
    </nav> -->

    <div class="flex justify-center items-center py-20">
        <h2 class="text-black">ASSET INFORMATION</h2>
        <form action="includes/Asset.inc.php" method="post">
            <div>
                ASSET CODE:
                <input type="text" name="ASSET_CODE" id="ASSET_CODE" class="border" required />
            </div>
            <div>
                ASSET NAME:
                <input type="text" name="ASSET_NAME" id="ASSET_NAME" required />
            </div>
            <div>
                SERIAL NUMBER:
                <input type="text" name="SERIAL_NUMBER" id="SERIAL_NUMBER" required />
            </div>
            <div>
                DATE PURCHASED:
                <input type="date" name="DATE_PURCHASED" id="DATE_PURCHASED" required />
            </div>
            <div>
                LIFE SPAN:
                <input type="text" name="LIFE_SPAN" id="LIFE_SPAN" required />
            </div>
            <div>
                CURRENT LOCATION:
                <input type="text" name="CURRENT_LOCATION" id="CURRENT_LOCATION" required />
            </div>
            <div>
                CURRENT STATUS:
                <input type="text" name="CURRENT_STATUS" id="CURRENT_STATUS" required />
            </div>
            <div>
                ASSET CONDITION:
                <input type="text" name="ASSET_CONDITION" id="ASSET_CONDITION" required />
            </div>
            <div>
                COST OF ITEM:
                <input type="number" name="COST_OF_ITEM" id="COST_OF_ITEM" required />
            </div>
            <div>
                CREATED BY:
                <input type="text" name="CREATED_BY" id="CREATED_BY" required />
            </div>
            <div>
                MODIFIED BY:
                <input type="text" name="MODIFIED_BY" id="MODIFIED_BY" required />
            </div>
            <input type="submit" value="SUBMIT" class="submit-btn full-width" />
        </form>
    </div>


</body>

</html>
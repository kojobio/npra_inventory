<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/distribution.css">
    <link rel="stylesheet" href="includes/css/dashboard.css">
    <title>Distribution Info.</title>
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
    <form action="includes/distribution_table.inc.php" method="post">
       <u> <h2>DISTRIBUTION INFORMATION </h2></u>
        ASSET ID: <input type="text" name="ASSET_ID" id="ASSET_ID"required>
        DOCTORATE ID: <input type="text" name="DOCTORATE_ID" id="DOCTORATE_ID"required>
        DATE ASSIGNED: <input type="date" name="DATE_ASSIGNED" id="DATE_ASSIGNED"required>
        STAFF ID: <input type="text" name="STAFF_ID" id="STAFF_ID"required>
        DATE RETURNED: <input type="date" name="DATE_RETURNED" id="DATE_RETURNED"required>
        ALLOCATED TIME: <input type="text" name="ALLOCATED_TIME" id="ALLOCATED_TIME"required>
        COMMENTS: <input type="textbox" name="COMMENTS" id="COMMENTS"required>
        CREATED BY: <input type="text" name="CREATED_BY" id="CREATED_BY"required>
        MODIFIED BY: <input type="text" name="MODIFIED_BY" id="MODIFIED_BY"required>
        <input type="submit" Value="SUBMIT" class="submit-btn">

    </form>
</body>
</html>
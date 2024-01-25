<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/technician.css">
    <link rel="stylesheet" href="includes/css/dashboard.css">
    <title>Technician Info</title>
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
    <form action="includes/technician.inc.php" method="post">
        <u><h2>TECHNICIAN INFORMATION</h2></u>
        FIRST NAME: <input type="text" id="FIRST_NAME" name="FIRST_NAME"required>
        LAST NAME: <input type="text" id="LAST_NAME" name="LAST_NAME"required>
        PHONE: <input type="number" id="PHONE" name="PHONE"required>
        COMPANY: <input type="text" id="COMPANY" name="COMPANY"required>
        Address: <input type="text" id="ADDR" name="ADDR"required>
        <input type="submit" value="SUBMIT" class="submit-btn"required>


    </form>
</body>
</html> 
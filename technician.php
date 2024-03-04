<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/technician.css" rel="" stylesheet>
    <!-- <link rel="stylesheet" href="includes/css/dashboard.css"> -->
    <!-- <title>Technician Info</title> -->
</head>

<body>
    <!-- <nav>
        <a href="dashboard.php" >Home</a>
        <a href="maintenance.php" >Maintenance</a>
        <a href="distribution_table.php" >Distribution</a>
        <a href="technician.php" >Technician</a>
        <a href="asset.php" >Asset</a>
        <a href="profile.php"  style="float:right" >Profile</a>
    </nav> -->
    <div class="wrapper">
        <h2 class="text-black">TECHNICIAN INFORMATION</h2>
        <form action="includes/technician.inc.php" method="post">
            <div>

                FIRST NAME:
                <input type="text" id="FIRST_NAME" name="FIRST_NAME" required>
            </div>
            <div>

                LAST NAME:
                <input type="text" id="LAST_NAME" name="LAST_NAME" required>
            </div>
            <div>

                PHONE:
                <input type="number" id="PHONE" name="PHONE" required>
            </div>
            <div>
                COMPANY:
                <input type="text" id="COMPANY" name="COMPANY" required>

            </div>
            <div>
                Address:
                <input type="text" id="ADDR" name="ADDR" required>

            </div>
            <input type="submit" value="SUBMIT" class="submit-btn full-width">


        </form>
    </div>
</body>

</html>
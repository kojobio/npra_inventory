<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/maintenance.css">
    <!-- <link rel="stylesheet" href="includes/css/dashboard.css"> -->
    <title>Maintenance Info.</title>
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
        <h2 class="text-black">MAINTENACE INFORMATION</h2>
        <form action="includes/maintenance.inc.php" method="post">
            <div>
                <span>
                    ASSET ID:
                </span>
                <input type="text" name="ASSET_ID" id="ASSET_ID" required>

            </div>
            <div>
                <span>
                    TECHNICIAN ID:
                </span>
                <input type="text" name="TECHNICIAN_ID" id="TECHNICIAN_ID" required>
            </div>
            <div>
                <span>
                    DATE OF MAINTENACE:
                </span>
                <input type="date" name="DATE_OF_MAINTENACE" id="DATE_OF_MAINTENACE" required>
            </div>
            <div>
                <span>
                    MAINTENANCE TYPE:
                </span>
                <input type="text" name="MAINTENANCE_TYPE" id="MAINTENANCE_TYPE" required>
            </div>
            <div>
                <span>
                    MAINTENANCE DISCRIPTION:
                </span>
                <input type="text" name="MAINTENANCE_DISCRIPTION" id="MAINTENANCE_DISCRIPTION" required>
            </div>
            <div>
                <span>

                    COST OF MAINTENANCE:
                </span>
                <input type="number" name="COST_OF_MAINTENANCE" id="COST_OF_MAINTENANCE" required>
            </div>
            <div>
                <span>

                    MAINTENANCE DURATION:
                </span>
                <input type="text" name="MAINTENANCE_DURATION" id="MAINTENANCE_DURATION" required>
            </div>
            <div>
                <span>

                    MAINTENANCE STATUS:
                </span>
                <input type="text" name="MAINTENANCE_STATUS" id="MAINTENANCE_STATUS" required>
            </div>
            <div>
                <span>

                    CREATED BY:
                </span>
                <input type="text" name="CREATED_BY" id="CREATED_BY" required>
            </div>
            <div>
                <span>

                    MODIFIED BY:
                </span>
                <input type="text" name="MODIFIED_BY" id="MODIFIED_BY" required>
            </div>
            <input type="submit" Value="SUBMIT" class="submit-btn full-width">
        </form>
    </div>
</body>

</html>
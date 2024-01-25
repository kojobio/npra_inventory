<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/dashboard.css">
    <link rel="stylesheet" href="includes/css/profile.css">
    <title>Profile</title>
</head>
<body>
    <header>
        <h1>User Profile</h1>
    </header>
    <nav>
        <a href="dashboard.php" >Home</a>
        <a href="maintenance.php" >Maintenance</a>
        <a href="distribution_table.php" >Distribution</a>
        <a href="technician.php" >Technician</a>
        <a href="asset.php" >Asset</a>
        <a href="profile.php"  style="float:right" >Profile</a>
    </nav>
    

<section  >
    <p><strong>Full Name:</strong> *********************</p>
    <p><strong>Directorate/Unit:</strong> *********************</p>
    <p><strong>Staff ID:</strong> *********************</p>
    <p style="text-align: center;"><b><a href="logout.php" >LOG OUT</b></p>
</section>
    


</body>
</html>
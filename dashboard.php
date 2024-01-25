<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/dashboard.css">
    <title>Dashboard</title>
    <style>
        
    </style>
</head>
<body>

    <header>
        <h1>WELCOME $USER_ID</h1>
    </header>

    <nav>
        <a href="dashboard.php" >Home</a>
        <a href="maintenance.php" >Maintenance</a>
        <a href="distribution_table.php" >Distribution</a>
        <a href="technician.php" >Technician</a>
        <a href="asset.php" >Asset</a>
        <a href="profile.php"  class="Pro" style="float:right" >Profile</a>
    </nav>

    <section id="home">
        <h2>Home Section</h2>
        <!--we muive -->
    </section>
</body>
</html>


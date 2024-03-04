<?php
session_start();
include("includes/dbh.inc.php");
include("functions.php");
$user_data = check_login($pdo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/profile.css">
    <title>Profile</title>
</head>

<body>




    <section>
        <p><strong>Staff Role:</strong> <?php echo $user_data["user_role"]; ?></p>
        <!-- <p><strong>Directorate/Unit:</strong> *********************</p> -->
        <p><strong>Staff ID:</strong> <?php echo $user_data["STAFF_ID"]; ?></p>
        <p style="text-align: center;"><b><a href="logout.php">LOG OUT</b></p>
    </section>



</body>

</html>
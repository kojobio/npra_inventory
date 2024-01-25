<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/staff.css">
    <title>Staff Info.</title>
</head>
<body>
    <form action="includes/staff.inc.php" method="post">
       <u> <h2>STAFF INFORMATION</h2></u>
        FIRST NAME: <input type="text" name="FIRST_NAME" id="FIRST_NAME"required>
        LAST NAME: <input type="text" name="LAST_NAME" id="LAST_NAME"required>
        EMAIL: <input type="email" name="EMAIL" id="EMAIL"required>
        PHONE: <input type="number" name="PHONE" id="PHONE"required>
        DIRECTORATE: <input type="text" name="DIRECTORATE" id="DIRECTORATE"required>
        CREATED BY: <input type="text" name="CREATED_BY" id="CREATED_BY"required>
        MODIFIED BY: <input type="text" name="MODIFIED_BY" id="MODIFIED_BY"required>
        POSITION: <input type="text" name="POSITION" id="POSITION"required>
        <input type="submit" Value="SUBMIT" class="submit-btn">

    </form>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="includes/css/main.css">
</head>
<body>

<div class="signup-container">
    <h2>Signup</h2>
    <form action="includes/formhandler.inc.php" method="post">
        <div class="form-group">
            <label for="STAFF_ID">Staff ID:</label>
            <input type="text" id="STAFF_ID" name="STAFF_ID" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select id="user_role" name="user_role" required>
                <option value="IT Manager">IT Manager</option>
                <option value="Assistant IT Manager">Assistant IT Manager</option>
            </select>
        </div>
        <button type="submit" class="submit-btn">Signup</button>
    </form>
</div>

</body>
</html>

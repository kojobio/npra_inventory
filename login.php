<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="includes/css/style.css">
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">
        <div class="form-group">
            <label for="staffId">Staff ID:</label>
            <input type="text" id="staffId" name="staffId" >
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select id="role" name="role" >
                <option value="IT Manager">IT Manager</option>
                <option value="Assistant IT Manager">Assistant IT Manager</option>
            </select>
        </div>
        <button type="submit" class="submit-btn">Log In</button>
    </form>
</div>

</body>
</html>

</form>


<?php
$dsn = "mysql:host=localhost;dbname=inventory_system";
$dbusername = "root";
$dbpassword = "";



try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

// or you can just use
//$pdo = new PDO($dsn, $dbusername, $dbpassword);
//if you dont want to get error messages printed if there is an error
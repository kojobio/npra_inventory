<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $STAFF_ID = $_POST["STAFF_ID"];
    $pwd = $_POST["pwd"];
    $user_role = $_POST["user_role"];

    try {
        require_once "dbh.inc.php";

        // Hash the password password_hash for security
        //$hashedPassword = password_hash($pwd, PASSWORD_DEFAULT);

        //  placeholders and binding parameters
        $query = 'INSERT INTO users (STAFF_ID, pwd, user_role) VALUES (?, ?, ?);';
        $stmt = $pdo->prepare($query);

        // Binding parameters
        $stmt->bindParam(1, $STAFF_ID);
        //$stmt->bindParam(2, $hashedPassword);
        $stmt->bindParam(2, $pwd);
        $stmt->bindParam(3, $user_role);

        $stmt->execute();

        // Close connections
        $pdo = null;
        $stmt = null;

        header("location: ../login.php");
        exit();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("location: ../login.php");
    exit();
}
?>

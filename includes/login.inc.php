<?php

if (isset($_POST["staffId"]) && isset($_POST["password"]) && isset($_POST["role"])) {
    $STAFF_ID = $_POST["staffId"];
    $pwd = $_POST["password"];
    $user_role = $_POST["role"];

    try {
        require_once "dbh.inc.php";

        //  placeholders and binding parameters
        $query = "SELECT * FROM users WHERE STAFF_ID= :STAFF_ID AND pwd= :pwd AND user_role= :user_role";
        $stmt = $pdo->prepare($query);
        
        // Binding parameters
        $stmt->bindParam(':STAFF_ID', $STAFF_ID);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->bindParam(':user_role', $user_role);

        $stmt->execute();

        // Check if a row is found
        if ($stmt->rowCount() > 0) {
            header("location: ../dashboard.php");
            exit(); // Use exit() instead of die() after a header("location: ...") redirect
        } else {
            echo "Invalid credentials"; // login failure
        }

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    } finally {
        // Close connections
        $pdo = null;
        $stmt = null;
    }
} else {
    header("location: ../login.php");
    exit(); // Use exit() after a header("location: ...") redirect
}

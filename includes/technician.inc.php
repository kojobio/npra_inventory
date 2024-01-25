<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FIRST_NAME = $_POST["FIRST_NAME"];
    $LAST_NAME = $_POST["LAST_NAME"];
    $PHONE = $_POST["PHONE"];
    $COMPANY = $_POST["COMPANY"];
    $ADDR = $_POST["ADDR"];

    try {
        require_once "dbh.inc.php";


        //  placeholders and binding parameters
        $query = 'INSERT INTO technician (FIRST_NAME,LAST_NAME,PHONE,COMPANY,ADDR) VALUES (?, ?, ?,?,?);';
        $stmt = $pdo->prepare($query);

        // Binding parameters
        $stmt->bindParam(1, $FIRST_NAME);
        $stmt->bindParam(2, $LAST_NAME);
        $stmt->bindParam(3, $PHONE);
        $stmt->bindParam(4, $COMPANY);
        $stmt->bindParam(5, $ADDR);

        $stmt->execute();

        // Close connections
        $pdo = null;
        $stmt = null;

        header("location: ../dashboard.php");
        exit();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    //header("location: ../login.php");
    header("location: ../technician.php");
    exit();
}
?>

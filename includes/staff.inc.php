<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FIRST_NAME = $_POST["FIRST_NAME"];
    $LAST_NAME = $_POST["LAST_NAME"];
    $EMAIL = $_POST["EMAIL"];
    $PHONE = $_POST["PHONE"];
    $DIRECTORATE = $_POST["DIRECTORATE"];
    $CREATED_BY = $_POST["CREATED_BY"];
    $MODIFIED_BY = $_POST["MODIFIED_BY"];
    $POSITION = $_POST["POSITION"];

    try {
        require_once "dbh.inc.php";

        //  placeholders and binding parameters
        $query = 'INSERT INTO staff (FIRST_NAME,LAST_NAME,EMAIL,PHONE,DIRECTORATE,CREATED_BY,MODIFIED_BY,POSITION) VALUES (?, ?, ?,?,?,?,?,?);';
        $stmt = $pdo->prepare($query);

        // Binding parameters
        $stmt->bindParam(1, $FIRST_NAME);
        $stmt->bindParam(2, $LAST_NAME);
        $stmt->bindParam(3, $EMAIL);
        $stmt->bindParam(4, $PHONE);
        $stmt->bindParam(5, $DIRECTORATE);
        $stmt->bindParam(6, $CREATED_BY);
        $stmt->bindParam(7, $MODIFIED_BY);
        $stmt->bindParam(8, $POSITION);

        $stmt->execute();

        // Close connections
        $pdo = null;
        $stmt = null;

        header("location: ../thanks.php");
        exit();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("location: ../staff.php");
    exit();
}
?>

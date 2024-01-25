<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ASSET_CODE = $_POST["ASSET_CODE"];
    $ASSET_NAME = $_POST["ASSET_NAME"];
    $SERIAL_NUMBER = $_POST["SERIAL_NUMBER"];
    $DATE_PURCHASED = $_POST["DATE_PURCHASED"];
    $LIFE_SPAN = $_POST["LIFE_SPAN"];
    $CURRENT_LOCATION = $_POST["CURRENT_LOCATION"];
    $CURRENT_STATUS = $_POST["CURRENT_STATUS"];
    $ASSET_CONDITION = $_POST["ASSET_CONDITION"];
    $COST_OF_ITEM = $_POST["COST_OF_ITEM"];
    $CREATED_BY = $_POST["CREATED_BY"];
    $MODIFIED_BY = $_POST["MODIFIED_BY"];

    try {
        require_once "dbh.inc.php";


        //  placeholders and binding parameters
        $query = 'INSERT INTO asset (ASSET_CODE,ASSET_NAME,SERIAL_NUMBER,DATE_PURCHASED,LIFE_SPAN,CURRENT_LOCATION,CURRENT_STATUS,ASSET_CONDITION,COST_OF_ITEM,CREATED_BY,MODIFIED_BY) VALUES (?, ?, ?,?,?,?,?,?,?,?,?);';
        $stmt = $pdo->prepare($query);

        // Binding parameters
        $stmt->bindParam(1, $ASSET_CODE);
        $stmt->bindParam(2, $ASSET_NAME);
        $stmt->bindParam(3, $SERIAL_NUMBER);
        $stmt->bindParam(4, $DATE_PURCHASED);
        $stmt->bindParam(5, $LIFE_SPAN);
        $stmt->bindParam(6, $CURRENT_LOCATION);
        $stmt->bindParam(7, $CURRENT_STATUS);
        $stmt->bindParam(8, $ASSET_CONDITION);
        $stmt->bindParam(9, $COST_OF_ITEM);
        $stmt->bindParam(10, $CREATED_BY);
        $stmt->bindParam(11, $MODIFIED_BY);

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
    header("location: ../asset.php");
    exit();
}
?>

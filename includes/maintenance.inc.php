<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ASSET_ID = $_POST["ASSET_ID"];
    $TECHNICIAN_ID = $_POST["TECHNICIAN_ID"];
    $DATE_OF_MAINTENACE = $_POST["DATE_OF_MAINTENACE"];
    $MAINTENANCE_TYPE = $_POST["MAINTENANCE_TYPE"];
    $MAINTENANCE_DISCRIPTION = $_POST["MAINTENANCE_DISCRIPTION"];
    $COST_OF_MAINTENANCE = $_POST["COST_OF_MAINTENANCE"];
    $MAINTENANCE_DURATION = $_POST["MAINTENANCE_DURATION"];
    $MAINTENANCE_STATUS = $_POST["MAINTENANCE_STATUS"];
    $CREATED_BY = $_POST["CREATED_BY"];
    $MODIFIED_BY = $_POST["MODIFIED_BY"];

    try {
        require_once "dbh.inc.php";


        //  placeholders and binding parameters
        $query = 'INSERT INTO maintenance (ASSET_ID,TECHNICIAN_ID,DATE_OF_MAINTENACE,MAINTENANCE_TYPE,MAINTENANCE_DISCRIPTION,COST_OF_MAINTENANCE,MAINTENANCE_DURATION,MAINTENANCE_STATUS,CREATED_BY,MODIFIED_BY) VALUES (?, ?, ?,?,?,?,?,?,?,?);';
        $stmt = $pdo->prepare($query);

        // Binding parameters
        $stmt->bindParam(1, $ASSET_ID);
        $stmt->bindParam(2, $TECHNICIAN_ID);
        $stmt->bindParam(3, $DATE_OF_MAINTENACE);
        $stmt->bindParam(4, $MAINTENANCE_TYPE);
        $stmt->bindParam(5, $MAINTENANCE_DISCRIPTION);
        $stmt->bindParam(6, $COST_OF_MAINTENANCE);
        $stmt->bindParam(7, $MAINTENANCE_DURATION);
        $stmt->bindParam(8, $MAINTENANCE_STATUS);
        $stmt->bindParam(9, $CREATED_BY);
        $stmt->bindParam(10, $MODIFIED_BY);

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
    header("location: ../maintenance.php");
    exit();
}
?>

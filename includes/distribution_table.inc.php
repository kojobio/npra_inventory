<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ASSET_ID = $_POST["ASSET_ID"];
    $DOCTORATE_ID = $_POST["DOCTORATE_ID"];
    $DATE_ASSIGNED = $_POST["DATE_ASSIGNED"];
    $STAFF_ID = $_POST["STAFF_ID"];
    $DATE_RETURNED = $_POST["DATE_RETURNED"];
    $ALLOCATED_TIME = $_POST["ALLOCATED_TIME"];
    $COMMENTS = $_POST["COMMENTS"];
    $CREATED_BY = $_POST["CREATED_BY"];
    $MODIFIED_BY = $_POST["MODIFIED_BY"];

    try {
        require_once "dbh.inc.php";


        //  placeholders and binding parameters
        $query = 'INSERT INTO distribution_table (ASSET_ID, DOCTORATE_ID, DATE_ASSIGNED, STAFF_ID, DATE_RETURNED, ALLOCATED_TIME, COMMENTS, CREATED_BY, MODIFIED_BY) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);';
        $stmt = $pdo->prepare($query);

        // Binding parameters
        $stmt->bindParam(1, $ASSET_ID);
        $stmt->bindParam(2, $DOCTORATE_ID);
        $stmt->bindParam(3, $DATE_ASSIGNED);
        $stmt->bindParam(4, $STAFF_ID);
        $stmt->bindParam(5, $DATE_RETURNED);
        $stmt->bindParam(6, $ALLOCATED_TIME);
        $stmt->bindParam(7, $COMMENTS);
        $stmt->bindParam(8, $CREATED_BY);
        $stmt->bindParam(9, $MODIFIED_BY);

        $stmt->execute();

        // Close connections
        $stmt = null;
        $pdo = null;

        header("location: ../dashboard.php");
        exit();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("location: ../distribution_table.php");
    exit();
}
?>
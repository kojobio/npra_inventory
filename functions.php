<?php

function check_login($pdo)
{
    if (isset($_SESSION['STAFF_ID'])) {
        $id = $_SESSION['STAFF_ID'];
        $query = "SELECT * FROM users WHERE STAFF_ID = :id LIMIT 1";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user_data) {
            return $user_data;
        }
    }

    header("Location: login.php");
    exit();
}

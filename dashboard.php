<?php

session_start();
include("includes/dbh.inc.php");
// include("functions.php");
// $user_data = check_login($pdo);


try {
    $stmt = $pdo->query("SELECT COUNT(*) as maintenance_count FROM maintenance");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_maintenance = $result['maintenance_count'];

    $stmt_asset = $pdo->query("SELECT COUNT(*) as asset_count FROM asset");
    $result_asset = $stmt_asset->fetch(PDO::FETCH_ASSOC);
    $total_assets = $result_asset['asset_count'];

    $stmt_staff = $pdo->query("SELECT COUNT(*) as staff_count FROM staff");
    $result_staff = $stmt_staff->fetch(PDO::FETCH_ASSOC);
    $total_staff = $result_staff['staff_count'];

    $stmt_technician = $pdo->query("SELECT COUNT(*) as technician_count FROM technician");
    $result_technician = $stmt_technician->fetch(PDO::FETCH_ASSOC);
    $total_technicians = $result_technician['technician_count'];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/dashboard.css">
    <!--TailwindCSS-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- <title>Dashboard</title> -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            /* background-color: #4a5568; */
            background-color: rgb(34 197 94);
            color: white;
            padding: 8px;
            text-align: left;
        }

        td {
            padding: 8px;
            text-align: left;
        }

        tbody tr:nth-child(odd) {
            background-color: #cbd5e0;
        }
    </style>
</head>

<body>
    <section id="home" class="flex justify-center items-center mx-auto">
        <div class="w-full md:w-2/3 ml-48">
            <div class="flex items-center justify-between w-full cursor-pointer">
                <h3 class="capitalize text-2xl font-semibold block text-gray-600">
                    Inventory overview
                </h3>

            </div>
            <div class="w-full grid grid-cols-1 grid-rows-1 md:grid-cols-4 lg:grid-cols-4 mt-8 gap-y-5 md:gap-x-5 lg:gap-x-10">
                <div class="group flex flex-col md:flex-row items-center justify-between shadow-xl px-2 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                    <span class="text-green-300 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                    </span>
                    <div class="flex flex-col  gap-2 items-start mr-auto ml-2 lg:mr-0">
                        <p class="capitalize text-gray-400 group-hover:text-white text-sm">
                            Maintenances
                        </p>
                        <p class="text-gray-800 font-bold text-2xl lg:text-3xl group-hover:text-white">
                            <?php echo $total_maintenance; ?>
                        </p>
                    </div>
                </div>

                <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-2 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                    <span class="text-yellow-300 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                        <p class="capitalize text-gray-400 group-hover:text-white text-sm">
                            Assets
                        </p>
                        <p class="text-gray-800 font-bold text-2xl lg:text-3xl group-hover:text-white">
                            <?php echo $total_assets; ?>
                        </p>
                    </div>
                </div>

                <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-2 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                    <span class="text-indigo-300 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                        <p class="capitalize text-gray-400 group-hover:text-white text-sm">
                            Staffs
                        </p>
                        <p class="text-gray-800 font-bold text-2xl lg:text-3xl group-hover:text-white">
                            <?php echo $total_staff; ?>
                        </p>
                    </div>
                </div>

                <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-2 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                    <span class="text-pink-300 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                        <p class="capitalize text-gray-400 group-hover:text-white text-sm">
                            Technicians
                        </p>
                        <p class="text-gray-800 font-bold text-2xl lg:text-3xl group-hover:text-white">
                            <?php echo $total_technicians; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="py-10">
                <div class="flex items-center justify-between w-full cursor-pointer py-7">
                    <h3 class="capitalize text-2xl font-semibold block text-gray-600">
                        Maintenance overview
                    </h3>
                </div>
                <table style="width: 100%;">
                    <thead>
                        <tr style="color: black;">
                            <th>TYPE</th>
                            <th>DESCRIPTION</th>
                            <th>COST</th>
                            <th>DURATION</th>
                            <th>STATUS</th>
                            <th>CREATED_BY</th>
                            <th>MODIFIED_BY</th>
                            <th>DATE</th>
                            <!-- <th>Operation</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM maintenance LIMIT 10";
                        $stmt = $pdo->query($sql);
                        if ($stmt) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $id = $row['MAINTENACE_ID'];
                                $type = $row['MAINTENANCE_TYPE'];
                                $des = $row['MAINTENANCE_DISCRIPTION'];
                                $cost = $row['COST_OF_MAINTENANCE'];
                                $duration = $row['MAINTENANCE_DURATION'];
                                $status = $row['MAINTENANCE_STATUS'];
                                $created = $row['CREATED_BY'];
                                $modified = $row['MODIFIED_BY'];
                                $date = $row['DATE_OF_MAINTENACE'];
                                echo "
            <tr>
            <td>$type</td>
            <td>$des</td>
            <td>$cost</td>
            <td>$duration</td>
            <td>$status</td>
            <td>$created</td>
            <td>$modified</td>
            <td>$date</td>
            ";
                            }
                        } else {
                            echo "<tr>
        <td colspan='3'>No Recent Maintenances</td>
        </tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="py-10">
                <div class="flex items-center justify-between w-full cursor-pointer py-7">
                    <h3 class="capitalize text-2xl font-semibold block text-gray-600">
                        Asset overview
                    </h3>
                </div>
                <table style="width: 100%;">
                    <thead>
                        <tr style="color: black;">
                            <th>CODE</th>
                            <th>NAME</th>
                            <th>SERIAL NUMBER</th>
                            <th>LIFE SPAN</th>
                            <th>CURRENT LOCATION</th>
                            <th>CURRENT STATUS</th>
                            <th>COST</th>
                            <th>DATE</th>
                            <!-- <th>Operation</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM asset LIMIT 10";
                        $stmt = $pdo->query($sql);
                        if ($stmt) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $id = $row['ASSET_ID'];
                                $type = $row['ASSET_CODE'];
                                $des = $row['ASSET_NAME'];
                                $cost = $row['SERIAL_NUMBER'];
                                $duration = $row['LIFE_SPAN'];
                                $status = $row['CURRENT_LOCATION'];
                                $created = $row['CURRENT_STATUS'];
                                $modified = $row['COST_OF_ITEM'];
                                $date = $row['DATE_PURCHASED'];
                                echo "
            <tr>
            <td>$type</td>
            <td>$des</td>
            <td>$cost</td>
            <td>$duration</td>
            <td>$status</td>
            <td>$created</td>
            <td>$modified</td>
            <td>$date</td>
            ";
                            }
                        } else {
                            echo "<tr>
        <td colspan='3'>No Recent Maintenances</td>
        </tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</body>

</html>
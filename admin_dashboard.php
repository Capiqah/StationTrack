<?php 
session_start();
if (!isset($_SESSION["admin_username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN | HOME</title>
    <link rel="icon" href="stationtrack1.png" type="image/gif" sizes="50x50">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: FloralWhite;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: #a51717;
            color: white;
            padding: 20px 0;
            transition: transform 0.3s ease-in-out;
        }

        .sidebar.closed {
            transform: translateX(-100%);
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 20px;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar img {
            display: block;
            margin: 0 auto 20px;
            width: 150px;
        }

        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000;
            background-color: #a51717;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .content {
            margin-left: 250px;
            padding: 30px;
            transition: margin-left 0.3s ease-in-out;
        }

        .content.shifted {
            margin-left: 0 !important;
        }

        .dashboard-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 30px auto;
            max-width: 1000px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            width: 280px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            border-left: 6px solid #a51717;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.15);
        }

        .card h3 {
            font-size: 32px;
            color: #a51717;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            font-weight: 600;
            color: #555;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            padding: 10px;
        }

        table {
            width: 100%;
            min-width: 600px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 2px solid #444;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }

        table td {
            color: #555;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .approve-button {
            background-color: rgb(17, 16, 16);
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 5px;
        }

        .reject-button {
            background-color: #a51717;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
        }

    </style>
</head>
<body>
 <!-- Sidebar -->
<button class="toggle-btn" id="toggleBtn">☰</button>


<div class="sidebar" id="sidebar">
    <br>
    </br>
    <a href="index.php"><img src="stationtrack1.png" alt="StationTrack Logo"></a>
    <a href="admin_dashboard.php"><i class="fa fa-home"></i> Home</a>
    <a href="staff_analysis.php"><i class="fa-solid fa-plus"></i> User Analysis</a>
    <a href="request_list.php"><i class="fa-solid fa-calendar-check"></i> Request Management</a>
    <a href="stationery_list.php"><i class="fa fa-boxes-stacked"></i> Stationery Management</a>
     <a href="supplier.php"><i class="fa fa-bar-chart"></i>Supplier</a>
     <a href="report.php"><i class="fa-solid fa-note-sticky"></i> Report</a>
    <a href="admin_profile.php"><i class="fa fa-user"></i> Profile</a>
    <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</div>
<br>

<div class="content" id="mainContent">
    <h1><b>Welcome, <?= $_SESSION['admin_username']; ?>!</b></h1>

    <?php
    include 'db_connect.php';

    $countStaff = "SELECT COUNT(*) as totalData FROM staff";
    $row_staff = mysqli_fetch_assoc(mysqli_query($conn, $countStaff));

    $countRequest = "SELECT COUNT(*) as totalrequest FROM stationery";
    $row_request = mysqli_fetch_assoc(mysqli_query($conn, $countRequest));
    ?>

    <div class="dashboard-cards">
        <div class="card">
            <h3><?= $row_staff['totalData'] ?></h3>
            <p>Total Staff</p>
        </div>
        <div class="card">
            <h3><?= $row_request['totalrequest'] ?></h3>
            <p>Total Requests</p>
        </div>
    </div>

    <h2 class="mt-5 text-center"><b>Recent Stationery Activity</b></h2>

    <div class="table-container">
        <table>
            <tr>
                <th>Staff ID</th>
                <th>Stationery Name</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Date</th>
            </tr>
            <?php
            $activityResult = mysqli_query($conn, "SELECT * FROM stationery ORDER BY stationery_date DESC LIMIT 10");
            while ($row = mysqli_fetch_assoc($activityResult)) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['staff_id']) ?></td>
                    <td><?= htmlspecialchars($row['stationery_name']) ?></td>
                    <td><?= htmlspecialchars($row['stationery_quantity']) ?></td>
                    <td><?= htmlspecialchars($row['stationery_description']) ?></td>
                    <td><?= htmlspecialchars($row['stationery_date']) ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <h2 class="mt-5 text-center"><b>Latest Request List</b></h2>

    <div class="table-container">
        <table>
            <tr>
                <th>Staff ID</th>
                <th>Stationery Name</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php
            $requestResult = mysqli_query($conn, "SELECT * FROM stationery ORDER BY stationery_date DESC LIMIT 10");
            while ($row = mysqli_fetch_assoc($requestResult)) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['staff_id']) ?></td>
                    <td><?= htmlspecialchars($row['stationery_name']) ?></td>
                    <td><?= htmlspecialchars($row['stationery_quantity']) ?></td>
                    <td><?= htmlspecialchars($row['stationery_description']) ?></td>
                    <td><?= htmlspecialchars($row['stationery_date']) ?></td>
                    <td>
                        <a class="approve-button" href="approved.php?studid=<?= $row['stationery_id'] ?>">Approve</a>
                        <a class="reject-button" href="reject.php?studid=<?= $row['stationery_id'] ?>">Reject</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</div>

<!-- JS -->
<script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleBtn');
    const mainContent = document.getElementById('mainContent');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('closed');
        mainContent.classList.toggle('shifted');
    });
</script>

</body>
</html>

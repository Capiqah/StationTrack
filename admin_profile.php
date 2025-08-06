<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>ADMIN | MY PROFILE</title>
    <link rel="icon" href="stationtrack1.png" type="image/gif" sizes="50x50">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background-color: rgb(165, 23, 23);
            color: white;
            padding: 20px 0;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .sidebar.closed {
            transform: translateX(-100%);
        }

        .sidebar img {
            display: block;
            margin: 0 auto 20px;
            width: 150px;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 20px;
        }

        .sidebar a:hover {
            background-color: rgb(165, 23, 23);
            border-radius: 5px;
        }

        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000;
            background-color: rgb(165, 23, 23);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 18px;
            cursor: pointer;
        }

        .content {
            margin-left: 270px;
            padding: 30px;
            transition: margin-left 0.3s ease;
        }

        .content.shifted {
            margin-left: 0;
        }

        .profile-card {
            max-width: 600px;
            background: white;
            margin: 0 auto;
            padding: 30px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
            border-radius: 15px;
            text-align: center;
        }

        .profile-card img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid rgb(165, 23, 23);
            margin-bottom: 20px;
        }

        .profile-card h2 {
            font-weight: bold;
            color: rgb(17, 17, 17);
        }

        .profile-details {
            text-align: left;
            margin-top: 20px;
        }

        .profile-details p {
            margin: 8px 0;
            font-size: 16px;
        }

        .edit-button {
            background-color: rgb(165, 23, 23);
            color: white;
            padding: 10px 20px;
            border: none;
            margin-top: 20px;
            border-radius: 8px;
            text-decoration: none;
        }

        .edit-button:hover {
            background-color: rgb(165, 23, 23);
        }

     

    </style>
</head>
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
 
<!-- Main Content -->
<div class="content" id="mainContent">
    <h1><b>My Profile</b></h1>
<br>
    </br>
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');
        const mainContent = document.getElementById('mainContent');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('closed');
            mainContent.classList.toggle('shifted');
        });
    </script>

    <?php
    include 'db_connect.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM admin WHERE admin_username ='".$_SESSION ['admin_username']."'";
    $result = $conn->query($sql);

    if (!$result) {
        echo "Query Failed: " . $conn->error;
        exit;
    }

    if ($row = $result->fetch_assoc()) {
        echo "<div class='profile-card'>";
        echo "<h2>" . $row["admin_username"] . "</h2>";
        echo "<div class='profile-details'>";
        echo "<p><strong>Admin ID:</strong> " . $row["admin_id"] . "</p>";
        echo "<p><strong>Admin Name:</strong> " . $row["admin_name"] . "</p>";
        echo "<p><strong>Email:</strong> " . $row["admin_email"] . "</p>";
        echo "<p><strong>Phone:</strong> " . $row["admin_phone"] . "</p>";
        echo "</div>";
        echo "<a class='edit-button' href='adminprofile_update.php?studid=" . $row["admin_id"] . "'>Edit Profile</a>";
        echo "</div>";
    }

    $result->free();
    $conn->close();
    ?>
</div>

</body>
</html>

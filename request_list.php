<!DOCTYPE html>
<html>
<head>
    <title> ADMIN | REQUEST LIST</title>
    <link rel="icon" href="stationtrack1.png" type="image/gif" sizes="50x50">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /* Table styles */
        table {
            width: 80%;
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
            background-color: #fff;
            color: #666;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tr:hover {
            background-color: #e9e9e9;
        }
        /* Action button styles */
        table .action-cell {
            width: 160px; /* Adjust as necessary */
        }
        table .action-buttons {
            display: flex;
            justify-content: center;
        }
        table a.button {
            display: inline-block;
            margin: 5px;
            padding: 8px 12px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        /* Back to home button style */
        .back-to-home {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 12px;
            background-color:  #a51717;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-to-home:hover {
            background-color: #a51717;
        }

         /* General body styling */
         body {
            margin: 0;
            font-family: 'Poppins', 'Roboto', Arial, sans-serif;
            background-color: FloralWhite;
        }


        /* Sidebar styling */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background-color:  #a51717;
            color: white;
            padding: 20px 0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transform: translateX(0); /* Initially visible */
            transition: transform 0.3s ease; /* Smooth transition */
        }

         .sidebar.closed {
            transform: translateX(-100%); /* Hidden position */
        }


        .sidebar h3 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #fff;
        }

        .sidebar .menu-title {
            padding: 10px 20px;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: bold;
            color: #c7c5ff;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 20px;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: #a51717;
            border-radius: 5px;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .sidebar img {
            display: block;
            margin: 0 auto 20px;
            width: 150px;
        }

        /* Main content */
        .content {
            margin-left: 250px;
            padding: 30px;
            transition: margin-left 0.3s ease; /* Smooth transition for main content */
        }

        .content.shifted {
            margin-left: 0; /* Content shifts left when sidebar is closed */
        }

        header {
            background-color: transparent;
            color: white;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 999;
            
        }
        
header * {  
display: inline;  
}  
header li {  
margin: 20px;  
}  
header li a {  
color: black;  
text-decoration: none;  
}  
 /* Toggle button styling */
 .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000;
            background-color:  #a51717;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .toggle-btn:hover {
            background-color:  #a51717;
        }

        .approve-button {
    background-color:rgb(17, 16, 16);
    color: white;
}

/* Styles for Reject button */
.reject-button {
    background-color: #a51717;
    color: white;
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
<br>
    <Body>
<header>  
<nav>  
<ul>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="inex4.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="admin_dashboard.php" title="Home">Home</a></b></li>
        <li> 
    <a href="logout.php" class="profile-icon" title="Logout" style="float:right">
        <i class="fa fa-user-circle-o"></i>
    </a>
</li>
    </li>
</ul>

</nav>  
</header>

  <!-- Main Content -->
  <div class="content" id="mainContent">
        <h1><B>User Request List </B></h1>
        <br>

        <script>
          // Sidebar toggle functionality
          const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');
        const mainContent = document.getElementById('mainContent');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('closed'); // Toggle sidebar visibility
            mainContent.classList.toggle('shifted'); // Shift content
        });
</script>

<?php
include 'db_connect.php';
// Check Connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<body style='background-color:Floral white'>";

$stationeryid = isset($_POST['stationtrack_stationeryid']) ? $_POST['stationtrack_stationeryid'] : "";
$stationery_date = isset($_POST['stationtrack_stationerydate']) ? $_POST['stationtrack_stationerydate'] : "";
$stationery_name = isset($_POST['stationtrack_stationeryname']) ? $_POST['stationtrack_stationeryname'] : "";
$stationery_quantity = isset($_POST['stationtrack_stationeryquantity']) ? $_POST['stationtrack_stationeryquantity'] : "";
$stationery_description = isset($_POST['stationtrack_stationerydescription']) ? $_POST['stationtrack_stationerydescription'] : "";
$stationery_status = isset($_POST['stationtrack_stationerystatus']) ? $_POST['stationtrack_stationerystatus'] : "";
$staffid = isset($_POST['stationtrack_staffid']) ? $_POST['stationtrack_staffid'] : "";




$ContohSQL = "SELECT * FROM stationery WHERE stationery_id LIKE '" . isset($_POST['stationtrack_stationeryid']). "%'";
$hasilQuery = $conn->query($ContohSQL);
if (!$hasilQuery) {
    echo "Query Failed: " . $conn->error;
    exit;
}

// Table for staff request
echo "<table align='center'>
    <tr>
        <th>Staff ID</th>
        <th>Stationery Name</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Date</th>
        <th>Action</th>
    </tr>";

// ambil and display data
while ($row = $hasilQuery->fetch_array()) {
    echo "<tr>
        <td>" . $row["staff_id"] . "</td>
        <td>" . $row["stationery_name"]."</td>
        <td>" . $row["stationery_quantity"] . "</td>
        <td>" . $row["stationery_description"] . "</td>
        <td>" . $row["stationery_date"] . "</td>
        <td class='action-cell'>
    <div class='action-buttons'>
        <a class='button approve-button' href='approved.php?studid=" . $row['stationery_id'] . "'>Approved</a>
        <a class='button reject-button' href='Reject.php?studid=" . $row['stationery_id'] . "'>Reject</a>
    </div>
</td>

    </tr>";
}
echo "</table>";

// Free result set
$hasilQuery->free_result();

$conn->close();
?>



</body>
</html>

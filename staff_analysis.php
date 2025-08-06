<!DOCTYPE html>
<html>
<head>
    <title>ADMIN | STAFF ANALYSIS</title>
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
            background-color:  #a51717;
        }
        table tr:hover {
            background-color:  #a51717;
        }
        /* Action button styles */
        table .action-cell {
            width: 160px; 
        }
        table .action-buttons {
            display: flex;
            justify-content: center;
        }
        table a.button {
            display: inline-block;
            margin: 5px;
            padding: 8px 12px;
            color:  #a51717;
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
            background-color:#a51717;
            color: white;
            padding: 20px 0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transform: translateX(0); 
            transition: transform 0.3s ease; 
        }

        .sidebar.closed {
            transform: translateX(-100%); 
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
            color:  #a51717;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 20px;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color:  #a51717;
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
        <h1><B>User Analysis</B></h1>
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
$staffid = isset($_POST['stationtrack_staffid']) ? $_POST['stationtrack_staffid'] : "";
$staff_name = isset($_POST['stationtrack_staffname']) ? $_POST['stationtrack_staffname'] : "";
$staff_department = isset($_POST['stationtrack_staffdepartment']) ? $_POST['stationtrack_staffdepartment'] : "";
$staff_email = isset($_POST['stationtrack_staffemail']) ? $_POST['stationtrack_staffemail'] : "";
$staff_phone = isset($_POST['stationtrack_staffphone']) ? $_POST['stationtrack_staffphone'] : "";


$ContohSQL = "SELECT * FROM staff WHERE staff_id LIKE '" . isset($_POST['stationtrack_staffid']). "%'";
$hasilQuery = $conn->query($ContohSQL);
if (!$hasilQuery) {
    echo "Query Failed: " . $conn->error;
    exit;
}

// Table for Project
echo "<table align='center'>
    <tr>
        <th>Staff ID</th>
        <th>Staff Name</th>
        <th>Department</th>
       
        <th>Email</th>
        <th>Phone Number</th>
        
    </tr>";

// Fetch and display data
while ($row = $hasilQuery->fetch_array()) {
    echo "<tr>
        <td>" . $row["staff_id"] . "</td>
        <td>" . $row["staff_name"]."</td>
        <td>" . $row["staff_department"] . "</td>

        <td>" . $row["staff_email"] . "</td>
        <td>" . $row["staff_phone"] . "</td>
        

      
        
        

    </tr>";
}
echo "</table>";

// Free result set
$hasilQuery->free_result();

$conn->close();
?>



</body>
</html>

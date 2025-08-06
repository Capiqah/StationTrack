<!DOCTYPE html>
<html>
<head>
    <title>STATIONTRACK | MY REQUEST</title>
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
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
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
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
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

     body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #fdf6f0;
            color: #333;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color:  rgb(165, 23, 23);
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .sidebar.hidden {
            transform: translateX(-100%);
        }

        .sidebar img {
            display: block;
            margin: 0 auto 20px;
            width: 150px;
        }

        .sidebar .menu-title {
            margin: 15px 0;
            font-size: 12px;
            text-transform: uppercase;
            color: #ddd;
        }

        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .dropdown-content {
            display: none;
            background-color:  rgb(165, 23, 23);
            padding-left: 10px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

         .content {
            margin-left: 250px;
            padding: 40px;
            background: linear-gradient(to bottom right, #f3f1ff, #ffffff);
            min-height: 100vh;
            transition: margin-left 0.3s ease-in-out;
        }

        .content.full {
            margin-left: 0;
        }

        h1 {
            font-size: 28px;
            color:  rgb(7, 1, 1);
        }

       

         .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1001;
            background-color:  rgb(165, 23, 23);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        

        .update-button {
    background-color: black;
    color: white;
}

/* Styles for delete button */
.delete-button {
    background-color: rgb(165, 23, 23);
    color: white;
}

    </style>
</head>
<body>
 <button class="toggle-btn" id="toggleBtn">☰</button>
    
    <div class="sidebar" id="sidebar">
      
<br>
    </br>
        <a href="user_dashboard.php"><img src="stationtrack1.png" alt="StationTrack Logo"></a>
        <a href="user_dashboard.php"><i class="fa fa-home"></i> Home</a>
        <div class="dropdown">
            <a href="stationery.php"><i class="fa-solid fa-plus"></i> New Request</a>
        </div>
        <div class="dropdown">
            <a href="myrequest.php"><i class="fa-solid fa-calendar-check"></i> My Request</a>
        </div>
        <div class="dropdown">
            <a href="#"><i class="fa fa-user"></i> Profile</a>
            <div class="dropdown-content">
                <a href="user_profile.php">My Profile</a>
            </div>
        </div>
        <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
    </div>
 
 
    <!-- Toggle Button -->
    <button class="toggle-btn" id="toggleBtn">☰</button>
<br>
 
    <Body>
<header>  
<nav>  
<ul>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="inex4.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li>
<li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home"></a></b></li><li><b><a href="user_dashboard.php" title="Home">Home</a></b></li><li> 
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
        <h1><B>My Request List</B></h1>
        <br>

        <script>
          // Sidebar toggle fungsi
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

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Status update logic
if (isset($_GET['action']) && isset($_GET['stationery_id'])) {
    $stationery_id = $_GET['stationery_id'];
    $action = $_GET['action'];
    $new_status = ($action == 'approve') ? 'Approved' : 'Rejected';

    $updateSQL = "UPDATE stationery SET stationery_status = '$new_status' WHERE stationery_id = '$stationery_id'";

    if ($conn->query($updateSQL) === TRUE) {
        echo "<script>alert('Stationery status updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating status: " . $conn->error . "');</script>";
    }
}

// connect data
$sql = "SELECT * FROM stationery";
$result = $conn->query($sql);
if (!$result) {
    echo "Query Failed: " . $conn->error;
    exit;
}

echo "<table align='center'>
    <tr>
        <th>Staff ID</th>
        <th>Stationery Name</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['staff_id']}</td>
        <td>{$row['stationery_name']}</td>
        <td>{$row['stationery_quantity']}</td>
        <td>{$row['stationery_description']}</td>
        <td>{$row['stationery_date']}</td>
        <td>{$row['stationery_status']}</td>
        <td class='action-cell'>
            <div class='action-buttons'>
                <a class='button update-button' href='user_update.php?studid={$row['stationery_id']}'>Update</a>
                <a class='button delete-button' href='user_delete.php?studid={$row['stationery_id']}'>Delete</a>
            </div>
        </td>
    </tr>";
}
echo "</table>";

$result->free();
$conn->close();
?>

</body>
</html>


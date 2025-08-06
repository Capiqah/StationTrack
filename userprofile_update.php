



<!DOCTYPE html>
<html>
<head>
    <title>STATIONTRACK | UPDATE PROFILE</title>
    <link rel="icon" href="stationtrack1.png" type="image/gif" sizes="50x50">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
            background-color: rgb(165, 23, 23);
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar img {
            display: block;
            margin: 0 auto 20px;
            width: 150px;
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
            background-color: rgb(165, 23, 23);
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
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #e9e9e9;
        }

        .update-button {
            background-color: rgb(165, 23, 23);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            float: right;
            margin-top: 15px;
            margin-right: 10%;
            cursor: pointer;
        }

        .update-button:hover {
            background-color: darkred;
        }

        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: rgb(165, 23, 23);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<button class="toggle-btn" id="toggleBtn">☰</button>

<div class="sidebar" id="sidebar">
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

<div class="content" id="mainContent">
    <h1><b>Update Request</b></h1>
    <br>
    </br>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');
        const mainContent = document.getElementById('mainContent');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            mainContent.classList.toggle('full');
        });
    </script>

<?php
include 'db_connect.php';
if ($conn->connect_error)
	{
	die("Connection failed: " . $conn->connect_error);
	}
	echo "<body style='background-color:FloralWhite'>";
//$name = $_POST['txt_nama'];
//$matric_no = $_POST['txt_matrix'];
//$address = $_POST['txt_address'];

//Arahan SQL (Structure Query Language)
$ContohSQL = "SELECT * FROM staff WHERE staff_id = '".$_GET['studid']."' ";
//studid dari URL parameter
//Dapatkan hasil pencarian

$hasilQuery = $conn->query($ContohSQL);
//Mengesahkan query
	if(!$hasilQuery)
	{
	//Amaran jika query gagal
	echo "Query Failed: " . mysql_error();
	exit;
	}

//Cipta Form

echo "<form method= 'POST' action ='afterupdate_profile.php?equipid=".$_GET['studid']."'>";

//Create Table

echo "<table>";

//Looping menggunakan while.
while ($_POST = $hasilQuery->fetch_array())

{
//Senaraikan hasil pencarian untuk dikemaskini
echo "<tr><td>Staff ID</td><td><input type= 'text' name='txtModfield1' size='20' value='".
$_POST["staff_id"]."'></td></tr>";

echo "<tr><td>Staff Name</td><td><input type= 'text' name='txtModfield2' size='20' value='".
$_POST["staff_name"]."'></td></tr>";

echo "<tr><td>Department</td><td><input type= 'text' name='txtModfield3' size='20' value='".
$_POST["staff_department"]."'></td></tr>";

echo "<tr><td>Email Address</td><td><input type= 'text' name='txtModfield5' size='20' value='".
$_POST["staff_email"]."'></td></tr>";

echo "<tr><td>Phone Number </td><td><input type= 'text' name='txtModfield4' size='20' value='".
$_POST["staff_phone"]."'></td></tr>";


}

  echo "</table>";
    echo "<button type='submit' name='cmdSubmit' class='update-button'>Update</button>";
    echo "</form>";




//Free Memory
$hasilQuery->free_result();
?>

</body>
</html>
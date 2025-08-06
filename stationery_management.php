<?php
include 'db_connect.php';
$stationery_query = "SELECT * FROM stationery";
$result = $conn->query($stationery_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN | STATIONERY MANAGEMENT</title>
    <link rel="icon" href="stationtrack1.png" type="image/gif" sizes="50x50">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Styles from your existing code - shortened here for clarity */
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
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
         .sidebar.closed {
            transform: translateX(-100%); /* Hidden position */
        }

        .content {
            margin-left: 250px;
            padding: 40px;
            min-height: 100vh;
            background: linear-gradient(to bottom right, #f3f1ff, #ffffff);
        }

        form {
            width: 95%;
            background-color: floralwhite;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        form input, form select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"] {
            width: 20%;
            background-color: rgb(165, 23, 23);
            color: white;
            border: none;
            float: right;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: rgb(145, 20, 20);
        }

        table {
            width: 95%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #f2f2f2;
            color: #333;
        }

        table tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

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

    <div class="content">
        <h1>Stationery Request Form</h1>
        <form name="form1" method="post" action="insert_stationery.php">
            <label for="stationtrack_updatename">Stationery Name:</label>
            <select id="stationtrack_updatename" name="stationtrack_updatename" required>
                <option value='' selected disabled>Select Stationery</option>
                <option value='A4 Paper'>A4 Paper</option>
                <option value='Calculator'>Calculator</option>
                <option value='Catridge'>Catridge</option>
                <option value='Envelope'>Envelope</option>
                <option value='Higlighter'>Highlighter</option>
                <option value='Hole Puncher'>Hole Puncher</option>
                <option value='Notebook'>Notebook</option>
                <option value='Office Folder'>Office Folder</option>
                <option value='Paper Clips'>Paper Clips</option>
                <option value='Pen'>Pen</option>
                <option value='Pencil'>Pencil</option>
                <option value='Stamp Pad'>Stamp Pad</option>
                <option value='Stapler'>Stapler</option>
                <option value='Staples'>Staples</option>
                <option value='Staples Remover'>Staples Remover</option>
                <option value='Sticky Note'>Sticky Note</option>
 
            </select>

            <label for="stationtrack_updatequantity">Quantity:</label>
            <input type="number" id="stationtrack_updatequantity" name="stationtrack_updatequantity" placeholder="Enter Quantity" required>

             <label for="stationtrack_updateuom">UOM:</label>
            <select id="stationtrack_updateuom" name="stationtrack_updateuom" required>
                  <option value='' selected disabled>Select UOM</option>
                <option value='Bag'>Bag</option>
                <option value='Box'>Box</option>
                <option value='Bundle'>Bundle</option>
                <option value='Carton'>Carton</option>
                <option value='Dozen'>Dozen</option>
                <option value='Pack'>Pack</option>
                <option value='Pcs'>Pcs</option>
                <option value='Roll'>Roll</option>
                <option value='Set'>Set</option>
                <option value='Tube'>Tube</option>
                <option value='Unit'>Unit</option>

            </select>



            <input type="submit" name="button" value="Submit">
        </form>

        

    </div>

</body>
</html>

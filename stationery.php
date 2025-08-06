<?php
include 'db_connect.php';
$stationery_query = "SELECT * FROM stationery_update";
$result = $conn->query($stationery_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STATIONTRACK | NEW REQUEST</title>
    <link rel="icon" href="stationtrack1.png" type="image/gif" sizes="50x50">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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

    <div class="content">
        <h1>Stationery Request Form</h1>
        
        <form name="form1" method="post" action="insert.php">
            <label for="stationtrack_staffid">Staff ID:</label>
            <input type="text" id="stationtrack_staffid" name="stationtrack_staffid" placeholder="Enter Staff ID" required>

               <label for="stationtrack_stationeryname">Stationery Name:</label>
            <select id="stationtrack_stationeryname" name="stationtrack_stationeryname" required>
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

            <label for="stationtrack_quantity">Quantity:</label>
            <input type="number" id="stationtrack_stationeryquantity" name="stationtrack_stationeryquantity" placeholder="Enter Quantity" required>

            <label for="stationtrack_description">Description:</label>
            <input type="text" id="stationtrack_stationerydescription" name="stationtrack_stationerydescription" placeholder="Enter Description" required>

            <label for="stationtrack_date">Date:</label>
            <input type="date" id="stationtrack_stationerydate" name="stationtrack_stationerydate" required>

            <input type="submit" name="button" value="Submit">
        </form>

        <h2>Current Stationery Stock</h2>
        <?php
        
        $result = $conn->query($stationery_query);
        ?>
        <table>
            <thead>
                <tr>
                    <th>Stationery Name</th>
                    <th>Quantity Left</th>
                    <th>UOM</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $row['update_name'] ?></td>
                        <td><?= $row['update_left'] ?></td>
                        <td><?= $row['update_uom'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>

</body>
</html>

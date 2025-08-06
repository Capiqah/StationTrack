    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | NEW SUPPLIER</title>
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
            background-color:  rgb(165, 23, 23);
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .sidebar.hidden {
            transform: translateX(-100%);
        }

         .sidebar.closed {
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
        
        /* Form styling */
        form {
            width: 95%;
            background-color: floralwhite;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
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
            background-color:  rgb(165, 23, 23);
            color: white;
            border: none;
            cursor: pointer;
            float: right;
        }
        form input[type="submit"]:hover {
            background-color:  rgb(165, 23, 23);
        }
    
</style>
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
 
    
    <div class="content" id="mainContent">
        <h1>New Supplier Form</h1>
        <form name="form1" method="post" action="insert_supplier.php">
            
            <label for="stationtrack_suppliername">Supplier Name:</label>
            <input type="text" id="stationtrack_suppliername" name="stationtrack_suppliername" placeholder="Enter Supplier Name" required>

             <label for="stationtrack_supplieraddress">Address:</label>
            <input type="text" id="stationtrack_supplieraddress" name="stationtrack_supplieraddress" placeholder="Enter Address" required>

            <label for="stationtrack_supplierphone">Phone No:</label>
            <input type="text" id="stationtrack_supplierphone" name="stationtrack_supplierphone" placeholder="Enter Phone No" required>
            

            <label for="stationtrack_supplierlink">Link:</label>
            <input type="url" id="stationtrack_supplierlink" name="stationtrack_supplierlink" placeholder="Enter URL" required>
        
            
            <input type="submit" name="button" value="Submit">
        </form>
    </div>
    
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

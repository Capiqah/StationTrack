<?php
session_start();

if (!isset($_SESSION['staff_username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATIONTRACK | DASHBOARD</title>
    <link rel="icon" href="stationtrack1.png" type="image/png" sizes="50x50">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
            padding-bottom: 40px;
        }

        .gallery-item {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s;
            position: relative;
            text-align: center;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            font-weight: bold;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .gallery-item a {
            display: block;
            background-color:  #a51717;
            color: #fff;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .gallery-item a:hover {
            background-color:#c93030;
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
    width: 220px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-left: 6px solid #a51717;
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

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}

    </style>
</head>
<body>
    <button class="toggle-btn" id="toggleBtn">☰</button>
    

    <div class="sidebar" id="sidebar">
        <br>
</br>
        <a href="index.php"><img src="stationtrack1.png" alt="StationTrack Logo"></a>
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
<br>
</br>

<?php
include 'db_connect.php';

$countStaff = "SELECT COUNT(*) as totalData FROM staff";
$row_staff = mysqli_fetch_assoc(mysqli_query($conn, $countStaff));

$countRequest = "SELECT COUNT(*) as totalrequest FROM stationery";
$row_request = mysqli_fetch_assoc(mysqli_query($conn, $countRequest));

?>

    <div class="content" id="mainContent">
        <h1>Welcome, <?php echo $_SESSION['staff_name']; ?>!</h1>

<!-- DASHBOARD CARDS -->
 <div class="dashboard-cards">
      <div class="card">
            <div class="icon"><i class="fa-solid fa-calendar-check"></i></div>
            <h3><?= $row_request['totalrequest'] ?></h3>
            <p>My Stationery Request</p>
        </div>
        <div class="card">
            <div class="icon"><i class="fa fa-bar-chart"></i></div>
            <h3><?= $row_request['totalrequest'] ?></h3>
            <p>Completed Requests</p>
        </div>
    </div>


        <div class="gallery">
            <div class="gallery-item">
                <img src="booking.jpg" alt="Stationery Request">
                <a href="stationery.php">Request Now
                <div class="overlay" >Stationery Request</div>
</a>
            </div>

            

            <div class="gallery-item">
                <img src="report.jpg" alt="View Request">
                <a href="myrequest.php">View Request
                <div class="overlay">My Requests</div>
</a>
              </div>
        </div>
    </div>

    <script>
        const toggleBtn = document.getElementById("toggleBtn");
        const sidebar = document.getElementById("sidebar");
        const             <a href="facility1.php">View Requests</a>
  content = document.getElementById("mainContent");

        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("hidden");
            content.classList.toggle("full");
        });
    </script>
</body>
</html>
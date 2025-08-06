<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATIONTRACK | ABOUT US</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="stationtrack1.png" type="image/png" sizes="50x50">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .highlight {
            color:  #a51717;
            font-weight: 600;
        }
        .section-header {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #a51717;
        }
        .section-sub {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 25px;
            color: #333;
        }
        .about-wrapper {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
            text-align: center;
        }
        .about-img { 
            width: 60%;
            border-radius: 12px;
            margin-bottom: 50px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        ul.about-list {
            padding-left: 20px;
            margin-bottom: 30px;
            color: #444;
            text-align: left;
            display: inline-block;
        }
        ul.about-list li {
            margin-bottom: 10px;
        }
        * {
    text-decoration: none;
    margin: 0px;
    padding: 0px;
}

body {
    margin: 0px;
    padding: 0px;
    font-family: 'Open Sans', sans-serif;
}

.wrapper {
    margin: 40px;
    position: relative;
}

.wrapper-nav {
    margin: 20px;
    position: relative;
    display: flex;
    justify-content: space-between;
}

.logo a {
    font-size: 50px;
    font-weight: bold;
    float: left;
    font-family: courier;
    color:  #a51717;
}

.menu {
    margin-left: 500px;
}

nav {
    width: 100%;
    margin: auto;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    background: #FFFFFF;
    z-index: 1;
    border-bottom: 1px solid  #a51717;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav ul li {
    float: left;
}

nav ul li a {
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}



h2 {
    font-family: 'Open Sans', sans-serif;
    font-weight: 800;
    font-size: 45px;
    margin-bottom: 20px;
    color: #a51717;
    width: 100%;
    line-height: 50px;
}


p {
    margin: 10px 0px;
    padding: 10px 0px 0px 0px;
}
    </style>
</head>

<body>
    
    <nav class="wrapper-nav">
        <div class="logo">
            <img src="stationtrack1.png" alt="StationTrack Logo" class="menu-logo">
            <a href="#">StationTrack</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>

    
    <div class="about-wrapper">
        <img src="about.jpg" alt="Stationery Overview" class="about-img">

        <h1 class="section-header">About StationTrack</h1>
        <p class="section-sub">
            <span class="highlight">StationTrack</span> is a modern digital platform built to revolutionize how organizations manage and track their office supplies and stationery inventory. By offering a centralized, transparent, and intuitive solution, StationTrack eliminates the inefficiencies of manual paperwork, enhances accountability, and streamlines the request and approval process across all levels.
        </p>

        <h2 class="section-header">Our Purpose</h2>
        <p class="section-sub">We aim to transform the way institutional resources are handled by focusing on:</p>
        <ul class="about-list">
            <li>Minimizing human error and delays in the request process</li>
            <li>Providing a transparent and real-time overview of inventory</li>
            <li>Reducing resource wastage and promoting efficiency</li>
            <li>Maintaining complete digital records for reporting and auditing</li>
        </ul>

        <h2 class="section-header">Who We Serve</h2>
        <p class="section-sub">
            StationTrack is specifically developed for academic institutions, administrative departments, and government agencies. It is currently deployed at <span class="highlight">UiTM Puncak Perdana</span> as a benchmark initiative to support digital transformation in resource management.
        </p>

        <h2 class="section-header">Our Vision</h2>
        <p class="section-sub">
            To become Malaysia’s most trusted and intelligent digital solution for internal resource management, empowering organizations to operate more transparently and efficiently.
        </p>

        <h2 class="section-header">Our Mission</h2>
        <ul class="about-list">
            <li>To deliver a seamless and efficient experience in requesting and managing supplies</li>
            <li>To foster data-driven decision-making across departments</li>
            <li>To provide a scalable platform that grows with your institution</li>
        </ul>
    </div>

  
    <footer style="background-color:  #a51717; color: white; padding: 20px; margin-top: 60px;">
        <div class="footer-links" style="text-align: center;">
            <a href="https://uitm.edu.my/index.php/en/disclaimer-copyright" style="color: white;">Disclaimer</a> |
            <a href="https://uitm.edu.my/index.php/en/privacy-statement" style="color: white;">Privacy Policy</a> |
            <a href="https://ppii.uitm.edu.my/images/pekeliling/universiti/Dasar/DasarKeselamatanICTv2.pdf" style="color: white;">ICT Security</a>
        </div>
        <p style="text-align: center; margin-top: 10px;">&copy; <?= date('Y') ?> StationTrack Unit. All Rights Reserved.</p>
    </footer>
</body>
</html>

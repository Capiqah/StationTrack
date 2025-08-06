<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StationTrack</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="stationtrack1.png" type="image/png" sizes="50x50">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
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

section {
    margin-bottom: 80px;
    display: flex;
}

.kolam {
    margin-top: 50px;
    margin-bottom: 50px;
}

.kolam .deskripsi {
    font-size: 20px;
    font-weight: bold;
    font-family: 'Open Sans', sans-serif;
    color:  #a51717;
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

a.tbl-biru {
    background:  #a51717;
    border-radius: 20px;
    margin-top: 50px;
    padding: 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-biru:hover {
    background:  #a51717;
    text-decoration: none;
}

p {
    margin: 10px 0px;
    padding: 10px 0px 0px 0px;
}

.gallery {
    display: flex;
    margin: auto;
    width: 100%;
    flex-direction: column;
    justify-content: center;
}

.gallery-top,
.gallery-bottom {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
}

.gallery-item {
    position: relative;
    width: 250px;
    height: 250px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
}

.gallery-item .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-transform: uppercase;
}

.gallery-item:hover .overlay {
    opacity: 1;
}

.gallery-item:hover img {
    transform: scale(1.05);
    opacity: 0.7;
}

.equipment-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 20px;
    margin-top: 20px;
}

.equipment {
    background-color: #fff;
    border-radius: 5px;
    padding: 15px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
    cursor: pointer;
    transition: transform 0.2s;
}

.equipment:hover {
    transform: scale(1.05);
}

.equipment img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.equipment h3 {
    margin-top: 10px;
}

</style>
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
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    
    <div class="wrapper">

      
        <section>
            <div class="kolam">
                <p class="deskripsi">Welcome to StationTrack</p>
                <h2>Efficiently Manage Your Stationery Resources</h2>
                <p>StationTrack helps you monitor, track, and manage stations efficiently with real-time analytics and an intuitive interface.</p>
                <br>
                <a href="signup.php" class="tbl-biru">Get Started</a>
            </div>
            <div class="kolam">
                <img src="stationery1.jpg" alt="Station Preview" width="90%">
            </div>
        </section>

        
        <section id="features" class="keyFeatures">
            <div class="feature">
                <img src="https://img.icons8.com/ios-filled/50/000000/alarm-clock.png" alt="Clock Icon">
                <h3>Live Tracking</h3>
                <p>Monitor station activities in real-time with accuracy and clarity.</p>
            </div>
            <div class="feature">
                <img src="https://img.icons8.com/ios-filled/50/000000/calendar.png" alt="Calendar Icon">
                <h3>Smart Analytics</h3>
                <p>Gain insights with detailed reports and performance charts.</p>
            </div>
            <div class="feature">
                <img src="https://img.icons8.com/ios-filled/50/000000/online-support.png" alt="Support Icon">
                <h3>User-Friendly</h3>
                <p>Simple, clean UI for seamless user experience across devices.</p>
            </div>
        </section>

       
        <section id="gallery" class="gallery">
            <div class="gallery-top">
                <div class="gallery-item">
                    <a href="about.php">
                        <img src="office.jpg" alt="Gallery 1">
                        <div class="overlay">About Us</div>
                    </a>
                </div>
                <a href="overview.php">
                <div class="gallery-item">
                    <img src="report.jpg" alt="Gallery 2">
                    <div class="overlay">Station Overview</div>
                </div>
            </div>
            </div>
        </section>

       
        <section id="contact" class="contact-container">
            <div class="info">
                <h3>Contact Us</h3>
                <p>Email: support@stationtrack.com</p>
                <p>Phone: +6012-345 6789</p>
                <p>Location: UiTM Puncak Perdana</p>
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-instagram-square"></i></a>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.721860140634!2d101.49522461475665!3d3.155564497661246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc469b6b172b55%3A0x2e9e7bb63c20891!2sUiTM%20Cawangan%20Selangor%20Kampus%20Puncak%20Perdana!5e0!3m2!1sen!2smy!4v1628578442582!5m2!1sen!2smy" 
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </div>

    
    <footer style="background-color:rgb(165, 23, 23); color: white; padding: 20px; margin: auto;">
        <div class="footer-links" style="text-align: center;">
            <a href="https://uitm.edu.my/index.php/en/disclaimer-copyright" style="color: white;">Disclaimer & Copyright</a> |
            <a href="https://uitm.edu.my/index.php/en/privacy-statement" style="color: white;">Privacy Statement</a> |
            <a href="https://ppii.uitm.edu.my//images/pekeliling/universiti/Dasar/DasarKeselamatanICTv2.pdf" style="color: white;">ICT Security Policy</a>
        </div>
        <p style="text-align: center; color: white;">Copyright © 2025 StationTrack Unit. All Rights Reserved</p>
    </footer>

</body>
</html>

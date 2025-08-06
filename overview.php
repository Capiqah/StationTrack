<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StationTrack | SYSTEM OVERVIEW</title>
  <link rel="icon" href="stationtrack1.png" type="image/png" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
    .hero, .section {
      padding: 80px 50px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 40px;
    }

    .hero-text, .section-text {
      flex: 1 1 45%;
    }

    .hero-text h1 {
      font-size: 48px;
      color: #a51717;
      margin-bottom: 20px;
    }

    .hero-text p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .btn {
      padding: 12px 25px;
      background-color: #a51717;
      color: white;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #8d1212;
    }

    .section-image img {
         width: 60%;
            border-radius: 12px;
            margin-bottom: 50px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    
    .section-text h2 {
      color: #a51717;
      font-size: 36px;
      margin-bottom: 20px;
    }

    .section-text p {
      font-size: 16px;
      color: #555;
    }

    footer {
      text-align: center;
      padding: 40px 20px;
      background-color: #a51717;
      color: white;
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      .hero, .section {
        flex-direction: column;
      }

      .hero-text, .section-text, .section-image {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
    <nav class="wrapper-nav">
        <div class="logo">
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


  <section class="hero">
    <div class="hero-text">
      <h1>Welcome to StationTrack</h1>
      <p>Your all-in-one solution to manage, monitor, and optimize stationery usage across your organization – with just a few clicks.</p>
    </div>
    
    <div class="section-image">
      <img src="ov7.jpg" alt="Hero System Overview" />
    </div>
  </section>

  <section class="section">
    <div class="section-text">
      <h2>Dashboard Overview</h2>
      <p>Gain instant visibility on stationery usage, total requests, and user activities. Our real-time dashboard provides insights that help you make smarter decisions.</p>
    </div>
    <div class="section-image">
      <img src="ov4.jpg" alt="Dashboard Overview" />
    </div>
  </section>

  <section class="section">
    <div class="section-text">
      <h2>Stationery Request Module</h2>
      <p>Submit requests easily and track their approval status transparently. Reduce paperwork and streamline the process in a clean digital interface.</p>
    </div>
    <div class="section-image">
      <img src="ov6.jpg" alt="Request Module" />
    </div>
  </section>

  <section class="section">
    <div class="section-text">
      <h2>User & Role Management</h2>
      <p>Manage roles for admins and staff with secure access control. Keep your data safe and your workflow smooth with structured permissions.</p>
    </div>
    <div class="section-image">
      <img src="ov5.jpg" alt="User Management" />
    </div>
  </section>

  <section class="section">
    <div class="section-text">
      <h2>Ready To Boost Your Office Productivity?</h2>
      <p>Let StationTrack help you organize and automate your stationery requests like never before. Join us and revolutionize your supply chain management!</p>
      <br>
</br>
      <a href="signup.php" class="btn">Create Your Account</a>
    </div>
  </section>

  <footer>
    &copy; 2025 StationTrack. All rights reserved.
  </footer>
</body>
</html>


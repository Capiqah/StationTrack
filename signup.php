<?php

session_start();
include "db_connect.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $retype_password = $_POST["retype_password"];
    $role = $_POST["role"];

    // make sure the password are match
    if ($password !== $retype_password) {
        $_SESSION["error"] = "Passwords do not match!";
        header("Location: signup.php");
        // exit();
    }

    // Hash password before store in database 
    // $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // connection into database

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Query insert based on role
    if ($role === "admin") {
        $sql = "INSERT INTO admin (admin_name, admin_email, admin_phone, admin_username, admin_password) 
                VALUES ('$name', '$email', '$phone', '$username', '$password')";
    } else {
        $sql = "INSERT INTO staff (staff_name, staff_email, staff_phone, staff_username, staff_password) 
                VALUES ('$name', '$email', '$phone', '$username', '$password')";
    }
    // var_dump($_POST);
    // die;

    if (mysqli_query($conn, $sql)) {
        if ($role == "admin") {
            $_SESSION["admin_username"] = $username;

            header("Location: admin_dashboard.php");
        } else {
            $_SESSION["staff_username"] = $username;
            $_SESSION["staff_name"] = $name;

            header("Location: user_dashboard.php");
        }
        // exit();
    } else {
        $_SESSION["error"] = "Pendaftaran gagal: " . mysqli_error($conn);
        header("Location: signup.php");
        // exit();
        // echo "TEst";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | STATIONTRACK</title>
    <link rel="icon" href="stationtrack1.png" type="image/png" sizes="50x50">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .auth-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100svh;
    background-image: url("bg.jpg");
    background-size: cover;
}

.auth-box {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 350px;
}

.auth-header {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
}

.auth-header img {
    width: 70px;
    height: auto;
    margin-right: 10px;
}

.auth-header h1 {
    font-size: 28px;
    color:  #a51717;
}

.auth-box h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.auth-box input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.auth-box button {
    width: 100%;
    padding: 10px;
    background-color:  #a51717;
    border: none;
    color: white;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

.auth-box button:hover {
    background-color:  #a51717;
}

.auth-box p {
    margin-top: 15px;
    font-size: 14px;
}

.auth-box p a {
    color: #007BFF;
    text-decoration: none;
}

.auth-box p a:hover {
    text-decoration: underline;
}

.role-selection {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 15px;
}

.role-selection label {
    display: flex;
    align-items: center;
    font-size: 16px;
    font-weight: bold;
    color:  #a51717;
    cursor: pointer;
}

.role-selection input[type="radio"] {
    margin-right: 5px;
}

.radio-group {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 15px;
}

.logo {
    display: flex;
    flex-direction: row;
    gap: 1px;
}

.menu-logo {
    width: 70px;
    height: auto;
    margin-right: 10px;
}

.contact-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    gap: 20px;
}

.info {
    flex: 1;
    max-width: 400px;
    text-align: left;
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
</style>

<body class="auth-container">
    <div class="auth-box">
        <div class="auth-header">
            <img src="stationtrack1.png" alt="STATIONTRACK Logo">
            <h1>STATIONTRACK</h1>
        </div>
        <h2>Sign Up</h2>

        <?php
        if (isset($_SESSION["error"])) {
            echo '<p class="error-message">' . $_SESSION["error"] . '</p>';
            unset($_SESSION["error"]);
        }
        ?>


        <form action="" method="POST">

            <!-- Radio Buttons for User Role -->
            <div class="radio-group">
                <label><input type="radio" name="role" value="admin" required> Admin</label>
                <label><input type="radio" name="role" value="user" required> Staff</label>
            </div>
            <input type="text" name="name" placeholder="Name" required>

            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="text" name="username" placeholder="Username" required>

            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="retype_password" placeholder="Retype Password" required>


            <button type="submit">Sign Up</button>

            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>

</html>
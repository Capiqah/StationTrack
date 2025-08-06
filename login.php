<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $role = $_POST["role"];

    if (!empty($role) && $role == 'user') {
        if (!empty($username) && !empty($password)) {
            $sql = "SELECT * FROM staff WHERE staff_username = '$username' AND staff_password = '$password'";
            $query = mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) == 1) {
                $row_staff = mysqli_fetch_assoc($query);
                $_SESSION["staff_username"] = $username;
                $_SESSION["staff_name"] = $row_staff['staff_name'];
                $_SESSION["staff_id"] = $row_staff['staff_id']; 

                header("Location: user_dashboard.php");
                exit();
            } else {
                $error = "Invalid username or password for user role!";
            }
        } else {
            $error = "Please enter both username and password!";
        }
    } elseif ($role == 'admin') {
        if (!empty($username) && !empty($password)) {
            $sql1 = "SELECT * FROM admin WHERE admin_username = '$username' AND admin_password = '$password'";
            $query1 = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($query1) == 1) {
                $admin_staff = mysqli_fetch_assoc($query1);
                $_SESSION["admin_username"] = $username;
                $_SESSION["admin_name"] = $admin_staff['admin_name']; 

                header("Location: admin_dashboard.php");
                exit();
            } else {
                $error = "Invalid username or password for admin role!";
            }
        } else {
            $error = "Please enter both username and password!";
        }
    } else {
        $error = "Invalid credentials or role selection!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | STATIONTRACK</title>
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
        background-color:  #c93030;
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

    .radio-group {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 15px;
    }

    .radio-group label {
        font-size: 16px;
        font-weight: bold;
        color: #a51717;
        cursor: pointer;
    }

    .radio-group input[type="radio"] {
        margin-right: 5px;
    }

</style>

<body class="auth-container">
    <div class="auth-box">
        <div class="auth-header">
            <img src="stationtrack1.png" alt="STATIONTRACK Logo">
            <h1>STATIONTRACK</h1>
        </div>
        <h2>Login</h2>

        <?php if (!empty($error)) { echo "<p style='color: red;'>$error</p>"; } ?>

        <form action="" method="POST">
            <div class="radio-group">
                <label><input type="radio" name="role" value="admin" required> Admin</label>
                <label><input type="radio" name="role" value="user" required> Staff</label>
            </div>
            
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>


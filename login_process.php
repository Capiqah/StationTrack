<?php
include 'db_connect.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // pergi ke dashboard after user login
    } else {
        echo "Invalid username or password. <a href='login.php'>Try again</a>"; // back to login page if the attempt for login was unsuccessful
    }

    mysqli_close($conn);
}
?>

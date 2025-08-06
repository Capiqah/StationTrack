<?php
session_start();

if (isset($_POST['logout'])) {
    session_unset(); // padam semua this session variable
    session_destroy(); // hancurkan session
    header("Location: login.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATIONTRACK | LOGOUT</title>
    <link rel="icon" href="stationtrack1.png" type="image/gif" sizes="50x50">
    <style>
        body {  
            margin-top: 80px;  
            padding: 30px;  
            background-image: url('uitm4.jpg');
            background-size: cover;  
            background-repeat: no-repeat;
            background-position: center;
            font-family: Georgia;  
            font-size: 23px;
        }  
        header {    
            position: fixed;  
            left: 0;  
            right: 0;  
            top: 0px;  
            height: 80px;  
            display: flex;  
            align-items: center; 
            justify-content: center; 
            text-align: center; 
            box-shadow: 0 0 25px 0 black;  
        }  
        header a {  
            color: white;  
            text-decoration: none;  
            margin: 0 10px;
        }  
        form {
            margin-top: 100px; 
            text-align: center;
        }
        form .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 300px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <form method="post">
        <div class="container">
            <h2 style="color:  #a51717;">Log Out</h2>
            <p>Are you sure you want to log out?</p>
            <button type="submit" name="logout">Log Out</button>
            <button type="button" onclick="cancelLogout()">Cancel</button>
        </div>
    </form>

    <script>
        function cancelLogout() {
            window.history.back(); // back to previous page
        }
    </script>
</body>
</html>

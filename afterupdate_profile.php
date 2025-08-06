

<?php
include 'db_connect.php';
if ($conn->connect_error)
	{
	die("Connection failed: " . $conn->connect_error);
	}
    echo "<body style='background-color:FloralWhite'>";

 
    
$ContohSQL= "UPDATE staff SET staff_id = '". $_POST['txtModfield1']. "', staff_name = '".
$_POST['txtModfield2']."', staff_department = '".$_POST['txtModfield3']."', staff_phone = '".$_POST['txtModfield4']."', staff_email = '".
$_POST['txtModfield5']."' WHERE staff_id = '".$_GET['equipid']."'";


$hasilQuery = $conn->query($ContohSQL);


if (!$hasilQuery) {
    
    echo "Query Failed: " . mysqli_error($conn);
    exit;
} else {
    // Display success messages after update the profile
echo "<form action='user_profile.php' method='post'>";
    echo "<div style='background-color: #f0f0f0; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center; max-width: 300px; margin: 0 auto;'>";
    echo "<img src='correct.symbol.png' alt='Success Icon' style='width: 100px; height: auto;'>";
    echo "<br><br>";
    echo "<h1>Great!</h1>";
    echo "<h3>Data has been successfully saved in our database.</h3>";
    echo "<br>";
    echo "<button type='submit' style='background-color: #222; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>BACK</button>";
    echo "</div>";
    echo "</form>";
}

// Close connection
$conn->close();
?>

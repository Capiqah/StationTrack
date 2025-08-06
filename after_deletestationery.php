<?php
include 'db_connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_GET['equipid'])) {
    die("Error: No stationery ID provided.");
}

$updateid = $_GET['equipid'];

// First delete from related request table
$deleteRequestSQL = "DELETE FROM stationery_update WHERE update_id = '$updateid'";
$conn->query($deleteRequestSQL);

// Then delete from main stationery table
$deleteSQL = "DELETE FROM stationery_update WHERE update_id = '$updateid'";
$deleteResult = $conn->query($deleteSQL);

// confirmation after delete stationery data
echo "<body style='background-color:FloralWhite'>";
echo "<form action='stationery_list.php' method='post'>";
echo "<div style='background-color: #f0f0f0; padding: 60px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center; max-width: 300px; margin: 0 auto;'>";
echo "<img src='correct.symbol.png' alt='Success Icon' style='width: 100px; height: auto;'><br><br>";
echo "<h1>Deleted!</h1>";
echo "<h3>Data has been deleted in the database.</h3><br>";
echo "<button type='submit' style='background-color: #222; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>BACK</button>";
echo "</div>";
echo "</form>";

if (!$deleteResult) {
    echo "Query Failed: " . $conn->error;
    exit;
}

$conn->close();
?>

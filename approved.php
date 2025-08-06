<?php
include 'db_connect.php';

error_reporting(E_ALL);
ini_set('display_errors',1);
//Check connection
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}
echo "<body style='background-color:FloralWhite'>";


$stationeryid = $_GET['studid'];


$update_sql = "UPDATE stationery SET stationery_status = 'Approve' WHERE stationery_id = '$stationeryid'";


 
if (mysqli_query($conn, $update_sql)) {
  // Fetch the updated record
  $sql = "SELECT * FROM stationery WHERE stationery_id = '$stationeryid'";
  $query = mysqli_query($conn, $sql);

  if (mysqli_num_rows($query) == 1) {
      echo "<div style='border: 1px solid #ccc; padding: 20px; margin: 20px auto; width: 50%; text-align: center; background-color: white;'>";
      echo "<h3>The booking has been approved!</h3>";
      echo "<img src='correct.symbol.png' alt='Success Image' style='width: 150px; height: 150px;'>";
      echo "<br><br>";
      echo "<form action='request_list.php' method='get'>";
      echo "<button type='submit' style='background-color:   #a51717; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>Back</button>";
      echo "</form>";
      echo "</div>";
  } else {
      echo "Error: No booking found with this ID.";
  }
} else {
  echo "Error: " . $update_sql . "<br>" . $conn->error;
}
$conn->close();
?>	
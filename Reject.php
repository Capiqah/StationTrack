<?php
include 'db_connect.php';

error_reporting(E_ALL);
ini_set('display_errors',1);
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}
echo "<body style='background-color:FloralWhite'>";
// $stationeryid = isset($_POST['stationtrack_stationeryid']) ? $_POST['stationtrack_stationeryid'] : "";
// $stationery_date = isset($_POST['stationtrack_stationerydate']) ? $_POST['stationtrack_stationerydate'] : "";
// $stationery_name = isset($_POST['stationtrack_stationeryname']) ? $_POST['stationtrack_stationeryname'] : "";
// $stationery_quantity = isset($_POST['stationtrack_stationeryquantity']) ? $_POST['stationtrack_stationeryquantity'] : 0;
// $stationery_description = isset($_POST['stationtrack_stationerydescription']) ? $_POST['stationtrack_stationerydescription'] : "";
// $stationery_status = isset($_POST['stationtrack_stationerystatus']) ? $_POST['stationtrack_stationerystatus'] : "";
// $staffid = isset($_POST['stationtrack_staffid']) ? $_POST['stationtrack_staffid'] : 0;

$stationeryid = $_GET['studid'];

// var_dump($stationery_id);die;

$update_sql = "UPDATE stationery SET stationery_status = 'Rejected' WHERE stationery_id = '$stationeryid'";


// $sql = "INSERT INTO stationery (stationery_name, stationery_quantity, stationery_date, stationery_description, stationery_status, staff_id)
//  VALUES ( '$stationery_name', '$stationery_quantity', '$stationery_date', '$stationery_description', '$stationery_status', '$staffid')";

 
if (mysqli_query($conn, $update_sql)) {
  // ambil the updated record
  $sql = "SELECT * FROM stationery WHERE stationery_id = '$stationeryid'";
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) == 1) {

  $last_id = $conn->insert_id;
   echo "<div style='border: 1px solid #ccc; padding: 20px; margin: 20px auto; width: 50%; text-align: center; background-color: white;'>";
   echo "<h3>The booking has been rejected!</h3>";
   echo "<img src='sad.png' alt='Success Image' style='width: 150px; height: 150px;'>";
   echo "<br><br>";
   echo "<form action='request_list.php' method='get'>";
   echo "<button type='submit' style='background-color: #a51717; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>Back</button>";
  echo "</form>";
   echo "</div>";

}else {
  echo "Error: No booking found with this ID.";
}
} else {
echo "Error: " . $update_sql . "<br>" . $conn->error;
}
$conn->close();
?>	
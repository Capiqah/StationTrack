<!DOCTYPE html>
<html>
<head>
    <title>STATIONTRACK | THANK YOU!</title>
    <link rel="icon" href="stationtrack1.png" type="image/gif" sizes="50x50">
</head>

    <?php
include 'db_connect.php';
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}
echo "<body style='background-color:FloralWhite'>";
$stationeryid = isset($_POST['stationtrack_stationeryid']) ? $_POST['stationtrack_stationeryid'] : "";
$stationeryname = isset($_POST['stationtrack_stationeryname']) ? $_POST['stationtrack_stationeryname'] : "";
$stationeryquantity = isset($_POST['stationtrack_stationeryquantity']) ? $_POST['stationtrack_stationeryquantity'] : "";
$stationerydescription = isset($_POST['stationtrack_stationerydescription']) ? $_POST['stationtrack_stationerydescription'] : "";
$stationerydate = isset($_POST['stationtrack_stationerydate']) ? $_POST['stationtrack_stationerydate'] : "";
$staffid = isset($_POST['stationtrack_staffid']) ? $_POST['stationtrack_staffid'] : "";




$sql = "INSERT INTO stationery (stationery_name, stationery_quantity, stationery_description, stationery_date, staff_id)
 VALUES ( '$stationeryname', '$stationeryquantity', '$stationerydescription', '$stationerydate', '$staffid')";

 

 if ($conn->query($sql) === TRUE) {
   $last_id = $conn->insert_id;
   echo "<div style='border: 1px solid #ccc; padding: 20px; margin: 20px auto; width: 50%; text-align: center; background-color: white;'>";
   echo "<h3>The request has been submitted!</h3>";
   echo "<img src='correct.symbol.png' alt='Success Image' style='width: 150px; height: 150px;'>";
   echo "<br><br>";
   echo "<p>Last inserted request ID is: ". $last_id . "</p>";
   echo "<form action='myrequest.php' method='get'>";
   echo "<button style='background-color:  rgb(165, 23, 23); color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>Back</button>";
  echo "</form>";
   echo "</div>";

}else

{
	echo "Error: ".$sql . "<br>". $conn->error;
}
$conn->close();
?>	
</html>
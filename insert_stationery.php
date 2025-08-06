    <?php
include 'db_connect.php';
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}
echo "<body style='background-color:Floral white'>";
$updateid = isset($_POST['stationtrack_updateid']) ? $_POST['stationtrack_updateid'] : "";
$update_name = isset($_POST['stationtrack_updatename']) ? $_POST['stationtrack_updatename'] : "";
$update_quantity = isset($_POST['stationtrack_updatequanity']) ? $_POST['stationtrack_updatequantity'] : "";
$update_left = isset($_POST['stationtrack_updateleft']) ? $_POST['stationtrack_updateleft'] : "";
$update_uom = isset($_POST['stationtrack_updateuom']) ? $_POST['stationtrack_updateuom'] : "";







$sql = "INSERT INTO stationery_update (update_name, update_quantity,  update_uom)
 VALUES ( '$update_name', '$update_quantity',  '$update_uom')";

 

 if ($conn->query($sql) === TRUE) {
   $last_id = $conn->insert_id;
   echo "<div style='border: 1px solid #ccc; padding: 20px; margin: 20px auto; width: 50%; text-align: center; background-color: white;'>";
   echo "<h3>The request has been submitted!</h3>";
   echo "<img src='correct.symbol.png' alt='Success Image' style='width: 150px; height: 150px;'>";
   echo "<br><br>";
   echo "<p>Last inserted request ID is: ". $last_id . "</p>";
   echo "<form action='stationery_list.php' method='get'>";
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
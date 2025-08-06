<!DOCTYPE html>
<html>
<head>
    <title>ADMIN  | THANK YOU!</title>
    <link rel="icon" href="stationtrack1.png" type="image/gif" sizes="50x50">
</head>

    <?php
include 'db_connect.php';
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}
echo "<body style='background-color:FloralWhite'>";
$supplier_name = isset($_POST['stationtrack_suppliername']) ? $_POST['stationtrack_suppliername'] : "";
$supplier_address = isset($_POST['stationtrack_supplieraddress']) ? $_POST['stationtrack_supplieraddress'] : "";
$supplier_phone = isset($_POST['stationtrack_supplierphone']) ? $_POST['stationtrack_supplierphone'] : "";
$supplier_link = isset($_POST['stationtrack_supplierlink']) ? $_POST['stationtrack_supplierlink'] : "";





$sql = "INSERT INTO supplier (supplier_name, supplier_address, supplier_phone, supplier_link)
 VALUES ( '$supplier_name', '$supplier_address', '$supplier_phone', '$supplier_link')";

 

 if ($conn->query($sql) === TRUE) {
   $last_id = $conn->insert_id;
   echo "<div style='border: 1px solid #ccc; padding: 20px; margin: 20px auto; width: 50%; text-align: center; background-color: white;'>";
   echo "<h3>The request has been submitted!</h3>";
   echo "<img src='correct.symbol.png' alt='Success Image' style='width: 150px; height: 150px;'>";
   echo "<br><br>";
   echo "<p>Last inserted request ID is: ". $last_id . "</p>";
   echo "<form action='supplier.php' method='get'>";
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
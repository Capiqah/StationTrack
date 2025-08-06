<?php
include 'db_connect.php';
if ($conn->connect_error)
	{
	die("Connection failed: " . $conn->connect_error);
	}
    echo "<body style='background-color:FloralWhite'>";
    
$ContohSQL= "UPDATE supplier SET supplier_id = '". $_POST['txtModfield1']. "', supplier_name = '".
$_POST['txtModfield2']."', supplier_phone = '".$_POST['txtModfield3']."', supplier_address = '".$_POST['txtModfield4']."',
 supplier_link = '".$_POST['txtModfield5']."' WHERE supplier_id = '".$_GET['equipid']."'";


$hasilQuery = $conn->query($ContohSQL);


if (!$hasilQuery) {
 
    echo "Query Failed: " . mysqli_error($conn);
    exit;
} else {
    // Display success message after update the supplier profile
echo "<form action='supplier.php' method='post'>";
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
<?php
$fname = $_POST['fname'];
        $date_of_purchase= $_POST['purchase'];
		$Branch = $_POST['branch'];
		$warranty_period = $_POST['quantity'];
		

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "stocks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO product (id, name, date_of_purchase, Branch, warranty_period, created_at, updated_at ) VALUES (' ', '".$fname."', '".$date_of_purchase."','".$Branch."','".$warranty_period."''','1', '', '')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
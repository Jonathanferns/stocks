<?php
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

$sql = "INSERT INTO users VALUES ('John', 'Doe', 'john@example.com','sdf','dsf','sdf','','','2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
  /*  if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
		$Branch = $_POST['branch'];
		$role = $_POST['role'];
		$user_pass = $_POST['password'];
		$status = '1';
    

    
    $host = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "stocks";

    
    $con = mysqli_connect($host, $username, $password, $dbname);

    
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO users(full_name,email,password,branch,status,role,created_at, updated_at, id) VALUES ('".$fname."', '".$email."','".$user_pass."','".$Branch."','".$status."','".$role."','','',NULL)";
  //INSERT INTO `users` (`full_name`, `email`, `password`, `branch`, `status`, `role`, `created_at`, `updated_at`, `id`) VALUES ('test', 'tets', 'sdfs', 'sdf', 'sdf', 'sdf', '', '', NULL);
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
	else
		echo mysqli_error($con);	
  
    mysqli_close($con);
}
*/

 $fname = $_POST['fname'];
        $email = $_POST['email'];
		$Branch = $_POST['branch'];
		$role = $_POST['role'];
		$user_pass = $_POST['password'];
		$status = '1';

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

$sql = "INSERT INTO users VALUES ('".$fname."', '".$email."','".$user_pass."','".$Branch."','".$status."','".$role."','','','4')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
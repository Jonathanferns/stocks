<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
		$Branch = $_POST['Branch'];
		$role = $_POST['role'];
    }

    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stocks";

    
    $con = mysqli_connect($host, $username, $password, $dbname);

    
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO contactform_entries (id,name,email, Branch, role) VALUES ('0', '$fname', '$email', '$Branch', '$role')";
  
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    mysqli_close($con);

?>
if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }


    $sql = "INSERT INTO product_form(name,date_of_purchase,branch,warranty_period) VALUES ('0', '$fname', '$lname', '$email')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>
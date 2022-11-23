<?php
$host = "localhost"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username

$connectQuery = mysqli_connect($host,$userName,$userPass,"stocks");



if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}
echo $_GET['id'];
                    $sql = "UPDATE FROM product WHERE id=".$_GET['id'];
                    if (mysqli_query($connectQuery,$sql)) {
                      echo "Record updated successfully";
                    } else {
                      echo "Error updating record: ";
                    }
                    mysqli_close($connectQuery);
                    ?>
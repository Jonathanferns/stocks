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
                    $sql = "DELETE FROM users WHERE id=".$_GET['id'];
                    echo $sql;
                    if (mysqli_query($connectQuery,$sql)) {
                      echo "Record deleted successfully";
                    } else {
                      echo "Error deleting record: ";
                    }
                    mysqli_close($connectQuery);
                    ?>

    
<?php
$host = "localhost:3308"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username

$connectQuery = mysqli_connect($host,$userName,$userPass,"stocks");



if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}
                    $sql = "SELECT * FROM users WHERE id=".$_GET['id'];
            
                    if ($result = mysqli_query($connectQuery,$sql)) {
						if(mysqli_num_rows($result)==1){
							echo "true";
						}
                      
                    } 
                    mysqli_close($connectQuery);
                    ?>
			
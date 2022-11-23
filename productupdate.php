<?php
$host = "localhost";
$userName = "root";
$name = $_POST["name"];
$date_of_purchase = $_POST["date_of_purchase"];
$branch = $_POST["branch"];
$warranty_period = $_POST["warranty_period"];
$userPass = "";

$connectQuery = mysqli_connect($host,$userName,$userPass,"stocks");



if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}
echo $_POST['id'];
f ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "update product set name='$name', date of purchase='$date_of_purchase',branch ='$branch',warranty period='$warranty_period' where product='$product'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$name."-".$date of purchase."-".$branch."--".$warranty period.".$gender;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>                    
$sql = "UPDATE FROM product WHERE id=".$_GET['id'];
                    if (mysqli_query($connectQuery,$sql)) {
                      echo "Record updated successfully";
                    } else {
                      echo "Error updating record: ";
                    }
                    mysqli_close($connectQuery);
                    ?>
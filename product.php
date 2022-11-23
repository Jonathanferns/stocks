<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product table</title>
</head>
<body>
    <table border="1px" style="width:600px; line-height:40px;">
<thead>
<tr>
  <th>name</th>
  <th>date_of_purchase</th>
  <th>branch</th>
  <th>warranty_period</th>
  <th>status</th>
  <th>created_at</th>
  <th>updated_at</th>
  <th>action</th>


</tr>
</thead>
<tbody>
<?php
$host = "localhost"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username

$connectQuery = mysqli_connect($host,$userName,$userPass,"stocks");



if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `product`";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){ ?>

            <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['date_of_purchase']; ?></td>
                    <td><?php echo $row['branch']; ?></td>
                    <td><?php echo $row['warranty_period']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td><?php echo $row['updated_at']; ?></td>
                    <td><?php echo '<a href="productdelete.php?id=' . $row['id'] . '">Delete</a>'; ?>
                    <td><?php echo '<a href="productedit.php?id=' . $row['id'] . '">Edit</a>'; ?>
        </td>
                </tr>
            
   <?php     }

    }

    

}
?>

    </tbody>
</table>
</body>
</html>

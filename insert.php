<?php
$host = "localhost"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username

$connectQuery = mysqli_connect($host,$userName,$userPass,"stocks");



if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `users`";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
        $result_array = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($result_array, $row);
        }

    }

    echo json_encode($result_array);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users table</title>
</head>
<body>
    <h1>Display user table using HTML and PHP</h1>
    <?=$msg;?>
    <table border="1px" style="width:600px; line-height:40px;">
<thead>
<tr>
  <th>id</th>
  <th>full_name</th>
  <th>email</th>
  <th>password</th>
  <th>branch</th>
  <th>status</th>
  <th>role</th>
  <th>created_at</th>
  <th>updated_at</th>
</tr>
<tr>
  <td>1</td>
  <td>veloisa</td>
  <td>veloies@gmail.com</td>
  <td>123456</td>
  <td>computer</td>
  <td>1</td>
  <td>guest</td>
  <td>2022-11-10 17:01:27</td>
  <td>0000-00-00 00:00:00</td>
</tr>
<tr>
<td>2</td>
<td>johnny</td>
<td>johnny@gmail.com</td>
<td>12</td>
<td>computer</td>
<td>1</td>
<td>guest</td>
<td>2022-11-10 17:02:28</td>
<td>0000-00-00 00:00:00</td>
</tr>
<tr>
<td>3</td>
<td>mori</td>
<td>mori@gmail.com</td>
<td>87</td>
<td>computer</td>
<td>1</td>
<td>guest</td>
<td>2022-11-10 17:03:11</td>
<td>0000-00-00 00:00:00</td>
</tr>
<tr>
<td>3</td>
<td>mori</td>
<td>mori@gmail.com</td>
<td>87</td>
<td>computer</td>
<td>1</td>
<td>guest</td>
<td>2022-11-10 17:03:11</td>
<td>0000-00-00 00:00:00</td>
</tr>
<tr>
<td>4</td>
<td>jr</td>
<td>jr@gmail.com</td>
<td>56</td>
<td>computer</td>
<td>1</td>
<td>guest</td>
<td>2022-11-10 17:03:52</td>
<td>0000-00-00 00:00:00</td>
</tr>
<tr>
<td>5</td>
<td>pochku</td>
<td>po@gmail.com</td>
<td>23589</td>
<td>computer</td>
<td>1</td>
<td>guest</td>
<td>2022-11-10 17:04:49</td>
<td>0000-00-00 00:00:00</td>
</tr>
</thead>
</tbody>
      <?php
        while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['user_full_name']; ?></td>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['user_password']; ?></td>
                    <td><?php echo $row['user_branch']; ?></td>
                    <td><?php echo $row['user_status']; ?></td>
                    <td><?php echo $row['user_role']; ?></td>
                    <td><?php echo $row['user_created_at']; ?></td>
                    <td><?php echo $row['user_updated_at']; ?></td>
                <tr>
            <?}?>
        </tbody>
    </table>
</body>
</html>
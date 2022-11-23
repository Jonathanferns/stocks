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
                    $sql = "SELECT * FROM 'product' WHERE id=".$_GET['id']
                    <form action="connect.php" method="post"> 
      
    <label> Name: </label>         
    <input type="text" id="Name" size="15" value="<?php echo $row['name']; ?>"> <br> <br>  
    <br>

    <label for="date_of_purchase">Date of purchase:</label>
    <input type="date" id="purchase" name="purchase" value="<?php echo $row['date_of_purchase']; ?>"/><br>
  
      </br>
    Branch :  
</label><br>  
<input type="radio" id="computer" name="branch" value="<?php echo $row['branch']; ?>"> Computer <br>  
<input type="radio" id="mechanical"name="branch" value="<?php echo $row['branch']; ?>"> Mechanical<br>  
<input type="radio" id="electrical"name="branch" value="<?php echo $row['branch']; ?>"> Electrical 
<br>  
<br>
<label for="quantity">Warranty period(between 1 and 7):</label>
<input type="number" id="quantity" name="quantity" min="1" max="7" value="<?php echo $row['warranty_period']; ?>">
<br>
<br><label>
  <input type="submit"  value="<?php echo $row['submit']; ?>">
</label>

</form>
                    
                    ?>

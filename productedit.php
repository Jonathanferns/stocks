<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product table</title>
</head>
<body>
<?php
$host = "localhost"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username

$connectQuery = mysqli_connect($host,$userName,$userPass,"stocks");



if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `product` WHERE id=".$_POST['id'];
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) ==1){
        
       $row = mysqli_fetch_assoc($result) ?>
 <form action="productupdate.php" method="post"> 
      
      <label> Name: </label>         
      <input type="text" id="Name" size="15" value="<?php echo $row['name']; ?>"> <br> <br>  
      <br>
  
      <label for="date_of_purchase">Date of purchase:</label>
      <input type="datetime-local" id="purchase" name="purchase" value="<?php echo $row['date_of_purchase']; ?>"/><br>
    
        </br>
      Branch :  
  </label><br> <?php 
if ($row['branch'] == 'Computer'){ ?>
    <input type="radio" id="computer" name="branch" checked="checked"> Computer <br>  
<?php } else {
    ?>
    <input type="radio" id="computer" name="branch"> Computer <br>
    <?php
} ?>

<?php 
if ($row['branch'] == 'Mechanical'){ ?>
    <input type="radio" id="mechanical" name="branch" checked="checked"> Mechanical <br>  
<?php } else {
    ?>
    <input type="radio" id="mechanical" name="branch"> Mechanical <br>
    <?php
} ?>

<?php 
if ($row['branch'] == 'Electrical'){ ?>
    <input type="radio" id="electrical" name="branch" checked="checked"> Electrical <br>  
<?php } else {
    ?>
    <input type="radio" id="electrical" name="branch"> Electrical <br>
    <?php
} ?>

  <label for="quantity">Warranty period(between 1 and 7):</label>
  <input type="number" id="quantity" name="quantity" min="1" max="7" value="<?php echo $row['warranty_period']; ?>">
  <input type="hidden" id="product_id" name="product_id" value="<?php echo $row['id']; ?>">
  <br>
  <br><label>
    <input type="submit"  >
  </label>
  
  </form>
            
            
   <?php     

    }

    

}
?>
</body>
</html>

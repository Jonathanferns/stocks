<!DOCTYPE html>
<html>
<body>
 
<?php
$uid = $_POST['user_name'];
$pw = $_POST['password'];
 
if($uid == 'ben' and $pw == 'ben23')
{    
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged in successfully";
}
?>
 
</body>
</html>
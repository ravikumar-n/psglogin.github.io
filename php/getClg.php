<?php
//DEPRECATE warning will come so type this two lines in the top of the page to protect from sql injection
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$servername = "localhost";
$username = "devMX";
$password = "L0g1nTio2";
$dbname = "LOGIN-2017";

// Create connection
$pk   = $_POST['pk'];
$con = mysqli_connect($servername, $username, $password, $dbname);

    
//these two lines protects the code from the sql injection 
$pk = stripslashes($pk);
$pk= mysqli_real_escape_string($con,$pk);

error_reporting(E_ALL ^ E_DEPRECATED);
$query="select INSTITUTIONS from `table 1` where passkey = '$pk'";
$info = mysqli_query($con,$query);
$var = mysqli_fetch_assoc($info);

$query1="select count(pk) from `registered` where pk = '$pk'";
$result = mysqli_query($con,$query1);
$rowcount = mysqli_fetch_assoc($result);


if($rowcount['count(pk)'] < 10)
{

    echo $var["INSTITUTIONS"];	
  
}
else
{
     echo "15";
     exit();
}
mysqli_close($con);
?>
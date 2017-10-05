<?php
$servername = "localhost";
$username = "dummyMX";
$password = "dummyMXPassWord";
$dbname = "LOGIN-2017";

header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: http://nethunt.psglogin.in");


$myfile = file_put_contents('logs.txt', $_SERVER['HTTP_ORIGIN'].PHP_EOL, FILE_APPEND | LOCK_EX);

$con = mysqli_connect($servername, $username, $password, $dbname);

$data = $_POST['code'];
$query="SELECT  `name` , `rn`,`email` ,  `phone`,`alumnus`  FROM  `aluminreg2` WHERE  `mailcode` =  '$data'";

$info = mysqli_query($con,$query);


$res = mysqli_fetch_assoc($info);

if(!strcmp($res['alumnus'],'1')){
	echo json_encode($res);
}else{
	$query="SELECT  `cn` ,  `name` ,  `rn` ,  `email` ,  `phone`,`alumnus` FROM  `registered` WHERE  `mailcode` =  '$data'";
	$info = mysqli_query($con,$query);
	$var = mysqli_fetch_assoc($info);
	
	echo json_encode($var);
}
?>
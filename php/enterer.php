
<?php
$as = $_POST['as'];
$sd = $_POST['sd'];

$summary = $as." ".$sd;
$myfile = file_put_contents('logs.txt', $summary.PHP_EOL, FILE_APPEND | LOCK_EX);

?>
<?php
include_once("dbconfig.php");

$connect = new Connect();
$connection = $connect->getConnection();

$sql_select = "SELECT * FROM posts"; // you should get the data using $_GET an
$queue = array();

$result =  $connection->query($sql_select);
while ($row = $result->fetch_assoc()) {
    $queue[] = $row;

}
// echo "<pre>";
print_r(json_encode($queue, JSON_PRETTY_PRINT));
// echo "</pre>";
exit();

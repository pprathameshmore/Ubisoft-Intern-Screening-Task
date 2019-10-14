<?php
include_once("dbconfig.php");

$connect = new Connect();
$connection = $connect->getConnection();

$sql_select = "SELECT * FROM posts"; // you should get the data using $_GET an
$queue = array();
$row = array();
$i = 0;
$result =  $connection->query($sql_select);
while ($row = $result->fetch_assoc()) {
    $queue[$i] = $row;
    $i++;
}
echo "<pre>";
print_r($queue);
echo "</pre>";
exit();

?>

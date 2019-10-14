<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "registrations";
$connection = new mysqli($servername, $username, $password, $db_name);



$sql_select = "SELECT * FROM posts";
$queue = array();
$row = array();
$i = 0;
$result =  $connection->query($sql_select);
while ($row = $result->fetch_assoc()) {
    $queue[$i] = $row;
    $i++;
}

print_r($queue);

exit();

?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "registrations";

      //Create database
    /* $sql_create_database = "CREATE DATABASE registrations";
    if ($connection->query($sql_create_database) === TRUE) {
        echo "Database created succefully";
    } else {
        echo "Error";
    } */

    //Create table
    /* $sql_create_table = "CREATE TABLE posts(id int AUTO_INCREMENT PRIMARY KEY,
                         title varchar(20) NOT NULL, description varchar(20) NOT NULL)";

    if ($connection->query($sql_create_table) === TRUE) {
        echo "Table created succefully </br>";
    } else {
        echo "Error table";
    } */

    //Create connection
    $connection = new mysqli($servername, $username, $password, $db_name);

    //Check connection 
    if ($connection->connect_errno) {
        die("Failed");
    } else {
        echo "Connected to database";
    }

    ?>

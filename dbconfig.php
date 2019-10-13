<?php


   class Connect {

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $db_name = "registrations";
    public $connection;

    public function __construct()
    {
       
        return $this->connection;
    }

    public getConnection($connection) {
        return $connection;
    }

   }

    
       
        //Check connection 
        if ($connection->connect_errno) {
            return false;
        } else {
            echo "Connected to database";
            return $connection;
        }
        
    
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

    ?>

<?php


   class Connect {

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $db_name = "registrations";
    public $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
    }

    public function getConnection() 
    {
        if ($this->connection->connect_errno) {
            die("Error in connecting");
        } else {
           return $this->connection;
        }
    }
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

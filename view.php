<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>View</title>
</head>

<body>
    <?php $title =  $_POST["title"];
    $description = $_POST["description"];
    $file_name = $_FILES["image"]["name"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "registrations";

    $images = "images/";
    $path = $images . basename($file_name);

    //Create connection
    $connection = new mysqli($servername, $username, $password, $db_name);

    //Check connection 
    if ($connection->connect_errno) {
        die("Failed");
    } else {
        echo "Connected to database";
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
    //Insert values into table


    if (move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
        $sql_insert_table = "INSERT INTO posts (title, description, image) VALUES ('$title', '$description', '$file_name')";

        if ($connection->query($sql_insert_table) === TRUE) {
            echo "Inserted into table";
        } else {
            echo "Not inserted </br>" . $connection->error;
        }
    }




    $connection->close();

    ?>

</body>

</html>
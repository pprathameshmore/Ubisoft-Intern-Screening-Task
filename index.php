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
if (isset($_POST['submit'])) {
    $target = "images/" . basename($_FILES['image']['name']);


    $title =  $_POST['title'];
    $description = $_POST['description'];
    $file = $_FILES['image']['name'];

    $sql_insert_table = "INSERT INTO posts (title, description, image) VALUES ('$title', '$description', '$file')";

    if ($connection->query($sql_insert_table)=== NULL) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_insert_table . "<br>" . $connection->error;
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "Uploaded Image";
    } else {
        echo "Falied to upload";
    }

    $connection->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Timeline App</title>

    <!-- style.css -->
    <link rel="stylesheet" href="public/style/style.css">

    <!-- script.js -->
    <script src="public/scripts/script.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Timeline App</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">View</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Hello!</h1>
            <p class="lead">Welcome to Registration Form.</p>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="view.php" role="button">View all</a>
            </p>
        </div>
        <div class="container">
            <form name="form" action="index.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="inputDesciption">Description</label>
                    <input type="text" name="description" class="form-control" id="inputDescription" placeholder="Enter description" required>
                </div>
                <div class="form-group">
                    <label for="inputFile">Upload </label>
                    <input type="file" name="image" class="form-control" id="inputFile" required />
                </div>
                <button type="submit" name="submit" id="btnSumbit" class="btn btn-success">Post</button>
                <button type="reset" id="btnReset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
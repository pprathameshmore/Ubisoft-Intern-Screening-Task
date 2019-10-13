<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>View Products</title>
</head>

<body>
    <div>
        <a href="index.php">Link: Item Registration</a>
    </div>
    <?php

    class View
    {

        public function __construct()
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "registrations";
            $this->connection = new mysqli($servername, $username, $password, $db_name);
        }

        public function showData()
        {
            $sql_select = "SELECT * FROM posts";
            $result =  $this->connection->query($sql_select);
            $queue = array();
            $row = array();
            $temp_queue = array();
            // echo "<div class='row container-fluid'>";
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                /*echo "<div class='col'>";
                echo "<div class='card text-center' style='width: 18rem;'>";
                echo "<img src='images/" . $row['image'] . "' class='card-img-top'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
                echo "<p class='card-text'>" . $row['description'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>"; */
                //print_r ($row);
                $queue[$i] = $row;
                $i++;
            }
            $count = count($queue);
            echo "<div class='row container-fluid'>";
            for ($eachItem = $count - 1; $eachItem >= ($count - 6); $eachItem--) {
                echo "<div class='col'>";
                echo "<div class='card text-center' style='width: 18rem;'>";
                echo "<img src='images/" . $queue[$eachItem]['image'] . "' class='card-img-top'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $queue[$eachItem]['title'] . "</h5>";
                echo "<p class='card-text'>" . $queue[$eachItem]['description'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            echo "<div>Queue[$count]</div>";
            var_dump($queue);
            echo "</br>";
            var_dump($queue[0]['title']);
        }
    }

$view = new View();
$view->showData();



    ?>
</body>

</html>
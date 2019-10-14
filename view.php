<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!-- style.css -->
    <link rel="stylesheet" href="public/style/style.css">

    <!-- script.js -->
    <script src="script.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>View Products</title> <?php include_once("update.php") ?>
</head>

<body>

    <script>
        setInterval(function () {
            $.ajax({
                url: "update.php", //the page containing php script
                type: "get", //request type,
                dataType: 'json',
                data: {
                    "id": "663",
                    "title": "Tanmay Chougule",
                    "description": "Google",
                    "image": "ante-hamersmit-xzOUqqgxqK0-unsplash.jpg"
                }
                success: function(result) {
                    alert(result);
                }
            });
        }, 2000);
    </script>
    <div>
        <a href="index.php">Link: Item Registration</a>
    </div><?php

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
                    $queue = array();
                    $row = array();
                    $i = 0;
                    $result =  $this->connection->query($sql_select);
                    while ($row = $result->fetch_assoc()) {
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

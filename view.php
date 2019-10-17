<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!-- style.css -->
    <link rel="stylesheet" href="public/style/style.css">


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>View Products</title>
</head>


<body>

    <div class="container-fluid">
        <div class="row" id="items">

        </div>
    </div>
    <div>
        <p class="queue">Queue </p>
    </div>
    <div>
        <a href="index.php">Link: Item Registration</a>
    </div><?php

            include_once("dbconfig.php");

            class View extends Connect
            {

                public function showData()
                {

                    $sql_select = "SELECT * FROM posts";
                    $queue = array();
                    $result =  $this->connection->query($sql_select);
                    while ($row = $result->fetch_assoc()) {
                        $queue[] = $row;
                    }
                }
            }

            $view = new View();
            $view->showData();
            ?>
    <!-- script.js -->
    <script src="public/scripts/script.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
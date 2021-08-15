<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <?php include('links.php'); ?>
    <style>
        .inf-content {
            border: 1px solid #DDDDDD;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
        }
    </style>

</head>

<body>
    <div class="my_container">

        <?php include('navbar.php'); ?>


        <div class="box_shadow">

            <h1 class="text-center">Search Results : </h1>

            <?php
            $query = $_GET['query'];
            require 'conn.php';
            $sql = "SELECT * FROM doctors WHERE name LIKE '%$query%' OR experienced_in LIKE '%$query%' ";
            $result = mysqli_query($con, $sql);

            $count = mysqli_num_rows($result);

            if ($result) {
                // echo "Working";
            } else {
                echo "Not Working";
            }


            while ($row = mysqli_fetch_array($result)) {


            ?>
                <div class="card " style="width: 50%;margin: 20px auto;">
                    <div class="card-header">
                        <h4><?php echo $row['name'] . '(' . $row['degree'] . ')' ?></h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['experienced_in'] ?></h5>
                        <p class="card-text"><?php echo $row['email'] ?></p>
                        <p class="card-text"><?php echo $row['address'] ?></p>
                        <a href="#" class="btn btn-primary">View more</a>
                    </div>
                </div>






            <?php





            }

            ?>
        </div>
    </div>

</body>

</html>
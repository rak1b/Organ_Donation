<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include('links.php'); ?>

</head>

<body class=".bg-gradient-primary">
    <div class="my_container">

    <?php include('navbar.php'); ?>

    <div align="center" class="jumbotron">
        <form method="post" action="./pskreset/send_link.php">
      <p>Enter Email Address To Send Password Link</p>
      <input type="text" name="email">
      <input type="submit" name="submit_email">
    </form>
    </div>

    </div>
    </div>



</body>

</html>
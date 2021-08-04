
<?php 

if (isset($_POST['username'])) {
    require 'conn.php';

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' ";    
    $res = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($res);
   

    $count = mysqli_num_rows($res);
    if($count == 1 ){

        // echo print_r($row);       // Print the entire row data
        if($row['admin'] == 1){
            echo "<script> location.href='dashboard.php'; </script>";

        }else{
            echo "<script> location.href='home.php'; </script>";

        }
      

    }
    else{
        echo "<script> alert('login failed'); </script>";

        echo "ERROR: $sql <br> $con->error";
            }

        }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include('links.php'); ?>

</head>

<body>
    <?php include('navbar.php'); ?>
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                    <div class="row">
                        <div class="col text-center">
                            <h1>Login</h1>
                        </div>
                    </div>
                    <form action="login.php" method="post">



                        <div class="row align-items-center">
                            <div class="col mt-4">
                                <input type="text" name='username' class="form-control" placeholder="Username">
                            </div>
                        </div>
                        


                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="password" name = 'password' class="form-control" placeholder="Password">
                            </div>
                            
                        </div>

                        <div class="row justify-content-start mt-4">
                            <div class="col">
                                <button class="btn btn-primary mt-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php 
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("Connection Failed : ".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "INSERT INTO `donate_organ`.`users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    // echo($sql);

    if($con->query($sql) == true){
        // echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
                            <h1>Signup</h1>
                        </div>
                    </div>
                    <form action="signup.php" method="post">

                        <div class="row align-items-center">
                            <div class="col mt-4">
                                <input type="text" name='name' class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="email" name='email' class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <!-- <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="phone" name = 'phone'class="form-control" placeholder="Phone">
                            </div>
                        </div> -->


                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="password" name = 'password' class="form-control" placeholder="Password">
                            </div>
                            <div class="col">
                                <input type="password" name = 'confirm_password' class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="row justify-content-start mt-4">
                            <div class="col">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                                    </label>
                                </div>

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
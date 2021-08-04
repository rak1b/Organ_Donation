

<?php 

if (isset($_POST['fname'])) {
    require 'conn.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];



    // $sql = "INSERT INTO `donate_organ`.`users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    $sql = "INSERT INTO `users`(`fname`, `lname`, `username`, `email`, `phone`, `address`, `password`) VALUES ('$fname','$lname','$username','$email','$phone','$address','$password')";
    $res=mysqli_query($con,$sql); 
    if($res){
        echo "sign up successfull";

        // $DOMAIN = $_SERVER['SERVER_NAME'];
        // $URL = str_replace("signup","index",$_SERVER['REQUEST_URI']);

        echo "<script> location.href='login.php'; </script>";
      

    }
    else{
        echo "<script> alert('Error Occuurred,Please try again'); </script>";

                echo "ERROR: $sql <br> $con->error";
            }
    // else{
    //     echo "<script> alert('Error Occuurred,Please try again'); </script>";

    // }


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

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="text" name = 'fname' class="form-control" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" name = 'lname' class="form-control" placeholder="Last Name">
                            </div>
                        </div>


                        <div class="row align-items-center">
                            <div class="col mt-4">
                                <input type="text" name='username' class="form-control" placeholder="Username">
                            </div>
                        </div>
                        

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="email" name='email' class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="phone" name = 'phone'class="form-control" placeholder="Phone">
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="text" name = 'address'class="form-control" placeholder="Address">
                            </div>
                        </div>


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
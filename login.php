<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OD Admin </title>

    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template-->

    <link href="css/dashboard.css" rel="stylesheet">

</head>


<body class="">



    <div class="my_navcontainer" style="margin: 0 8%;">
        <?php include 'navbar.php' ?>
    </div>

    <?php


    if (isset($_POST['username'])) {
        require 'conn.php';

        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' ";
        $res = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($res);



        $count = mysqli_num_rows($res);
        if ($count == 1) {
            $_SESSION['username'] = $row['username'];


            // echo print_r($row);       // Print the entire row data
            if ($row['admin'] == 1) {
                echo "<script> location.href='Dashboard/home.php'; </script>";
            } else {
                echo "<script> location.href='home.php'; </script>";
            }
        } else {
            echo "<script> alert('Incorrect Username or Password'); </script>";

            echo "<br> $con->error";
        }
    }


    ?>




    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form action="login.php" class="user" method="POST">
                                    <div class="form-group">
                                        <input type="text" name='username' class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <input href="" type='submit' class="btn btn-primary btn-user btn-block" value="Login">
                                    </input>
                                    <hr>
                                    <a href="" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="./reset_pass.php">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="signup.php">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/dashboard.js"></script>

</body>

</html>
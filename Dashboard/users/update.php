<?php
require '../conn.php';

$id = $_GET['id'];

$sql = "select * from `users` WHERE id = '$id';";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);


if (isset($_POST['fname'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql_up = "UPDATE `users` SET `fname`='$fname',`lname`='$lname',`username`='$username',`email`='$email',`phone`='$phone',`address`='$address' WHERE id=$id";
    $res = mysqli_query($con, $sql_up);
    if ($res) {
        echo "<script> alert('Update successfull'); </script>";
        echo "<script> location.href='../users.php' ; </script>";
    }
}


?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OD Admin | Update Users Data </title>

    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template-->

    <link href="../../css/dashboard.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

</head>


<body class="">






    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row" style="min-height: calc(80vh - 100px);">
                        <div class="col-lg-6 d-none d-lg-block bg-contact"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Update Users Information</h1>
                                </div>
                                <form action="update.php?id=<?php echo $id ?>" method="post">

                                    <div class="row align-items-center mt-4">

                                        <div class="col">
                                            <input type="text" name='fname' value="<?php echo $row['fname'] ?>" class="form-control" placeholder="First Name">
                                        </div>

                                        <div class="col">
                                            <input type="text" name='lname' value="<?php echo $row['lname'] ?>" class="form-control" placeholder="Last Name">
                                        </div>

                                    </div>

                                    <div class="row align-items-center mt-4">
                                        <div class="col">
                                            <input type="text" name='username' value="<?php echo $row['username'] ?>" class="form-control" placeholder="Username">
                                        </div>

                                    </div>




                                    <div class="row align-items-center mt-4">
                                        <div class="col">
                                            <input type="email" name='email' value="<?php echo $row['email'] ?>" class="form-control" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="row align-items-center mt-4">
                                        <div class="col">
                                            <input type="phone" name='phone' value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="row align-items-center mt-4">
                                        <div class="col">
                                            <input type="text" name='address' value="<?php echo $row['address'] ?>" class="form-control" placeholder="Address">
                                        </div>
                                    </div>


                                    <div class="row justify-content-start mt-4">
                                        <div class="col">
                                            <button class="btn btn-primary mt-4">Update</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>

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
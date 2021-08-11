<?php

if (isset($_POST['name'])) {
    require 'conn.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $part = $_POST['part'];
    $others = $_POST['others'];



    // $sql = "INSERT INTO `donate_organ`.`users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    $sql = "INSERT INTO `organs`(`name`, `phone`, `address`, `part`, `other_info`) VALUES ('$name','$phone','$address','$part','$others')";
    $res = mysqli_query($con, $sql);
    if ($res) {
        echo "<script> alert('Form Submitted'); </script>";
    } else {
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

    


    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row" style="min-height: calc(80vh - 100px);">
                        <div class="col-lg-6 d-none d-lg-block bg-organ"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Organ Donation Form</h1>
                                </div>
                                <form action="organ_donate.php" method="post">


                                    <div class="row align-items-center">
                                        <div class="col mt-4">
                                            <input type="text" name='name' class="form-control" placeholder="Name">
                                        </div>
                                    </div>




                                    <div class="row align-items-center mt-4">
                                        <div class="col">
                                            <input type="phone" name='phone' class="form-control" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="row align-items-center mt-4">
                                        <div class="col">
                                            <input type="text" name='address' class="form-control" placeholder="Address">
                                        </div>
                                    </div>


                                    <div class="row align-items-center mt-4">
                                        <div class="col">
                                            <input type="text" name='part' class="form-control" placeholder="Which Orgna?">
                                        </div>
                                    </div>

                                    <div class="row align-items-center mt-4">
                                        <div class="col">
                                            <textarea name='others' class="form-control" placeholder="Other Information" rows="3"></textarea>
                                        </div>
                                    </div>


                                    <div class="row justify-content-start mt-4">
                                        <div class="col">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    I Read and Accept <a href="">Terms and Conditions</a>
                                                </label>
                                            </div>

                                            <button class="btn btn-primary mt-4">Submit</button>
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



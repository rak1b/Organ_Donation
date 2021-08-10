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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <?php include('links.php'); ?>

</head>

<body>
    <div class="my_container">

        <?php include('navbar.php'); ?>
        <section>
            <div class="container mt-5">
                <div class="row justify-content-center box_shadow">
                    <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                        <div class="row">
                            <div class="col text-center">
                                <h1>Organ Donation Form</h1>
                            </div>
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
                                    <input type="text" name='part' class="form-control" placeholder="Which part?">
                                </div>
                            </div>

                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <textarea  name='others' class="form-control" placeholder="Other Information" rows="3"></textarea>
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
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>
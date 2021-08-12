<?php

require 'conn.php';
session_start();

require 'permission.php';



function total_count($name, $con)
{
    $sql =     "select * from $name ";

    $result = mysqli_query($con, $sql);


    if ($result) {
    } else {
        echo "Not Working";
    }

    $total = mysqli_num_rows($result);

    echo $total;
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

    <link href="../css/dashboard.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'components/dashboard_sidebar.php' ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'components/dashboard_nav.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Doctors</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php total_count('doctors', $con) ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Users Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Users

                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php total_count('users', $con) ?></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Organ Card  -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Organ List
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php total_count('organs', $con) ?></div>
                                                </div>
                                                <!-- <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-lungs fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php total_count('requested', $con) ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Overview</h1>
                    </div>


                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    Our Doctors
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-responsive text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Degree</th>
                                                <th scope="col">Experienced in</th>
                                                <th scope="col">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            require 'conn.php';
                                            $sql =     "select * from doctors";
                                            $result = mysqli_query($con, $sql);


                                            if ($result) {
                                                // echo "Working";
                                            } else {
                                                echo "Not Working";
                                            }


                                            while ($row = mysqli_fetch_array($result)) {
                                                // echo $row['sid']; // Print a single column data
                                                // $num =  $row['count(distinct sid)']; // Print a single column data
                                                // echo print_r($row);       // Print the entire row data

                                            ?>

                                                <tr>
                                                    <td scope="row"><?php echo $row['name']; ?></td>
                                                    <td scope="row"><?php echo $row['degree']; ?></td>
                                                    <td scope="row"><?php echo $row['experienced_in']; ?></td>
                                                    <td scope="row"><?php echo $row['email']; ?></td>
                                                <?php




                                            }

                                                ?>

                                        </tbody>
                                    </table>

                                </div>
                            </div>



                        </div>

                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    Our Users
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-responsive text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Username</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            require 'conn.php';
                                            $sql =     "select * from users";
                                            $result = mysqli_query($con, $sql);


                                            if ($result) {
                                                // echo "Working";
                                            } else {
                                                echo "Not Working";
                                            }


                                            while ($row = mysqli_fetch_array($result)) {
                                                // echo $row['sid']; // Print a single column data
                                                // $num =  $row['count(distinct sid)']; // Print a single column data
                                                // echo print_r($row);       // Print the entire row data

                                            ?>

                                                <tr>
                                                    <td scope="row"><?php echo $row['username']; ?></td>
                                                    <td scope="row"><?php echo $row['email']; ?></td>
                                                    <td scope="row"><?php echo $row['phone']; ?></td>
                                                    <td scope="row"><?php echo $row['address']; ?></td>
                                                <?php




                                            }

                                                ?>

                                        </tbody>
                                    </table>

                                </div>
                            </div>




                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/dashboard.js"></script>


</body>

</html>
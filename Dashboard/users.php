<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Users | OD Admin </title>

    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template-->

    
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

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



                    <div class="row justify-content-center">

                        <div class="col-lg-10 offset ">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="font-weight-bold card-header mycard-header border-left-primary pt-3 pb-3 text-center">
                                    Our Users
                                </div>
                                <div class="card-body justify-content-center">
                                    <table class="table mytable table-bordered table-responsive text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Password</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Address</th>
                                                <th scope="col" colspan="2">Action</th>
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

                                            ?>

                                                <tr>
                                                    <td scope="row"><?php echo $row['id']; ?></td>
                                                    <td scope="row"><?php echo $row['fname']; ?></td>
                                                    <td scope="row"><?php echo $row['lname']; ?></td>
                                                    <td scope="row"><?php echo $row['username']; ?></td>
                                                    <td scope="row"><?php echo $row['password']; ?></td>
                                                    <td scope="row"><?php echo $row['email']; ?></td>
                                                    <td scope="row"><?php echo $row['phone']; ?></td>
                                                    <td scope="row"><?php echo $row['address']; ?></td>
                                                    <td><a href="edit.php?id=<?php echo $row['id']; ?>"><i class='fa fa-edit'></i></a></td>
                                                    <td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                            <?php




                                            }

                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            ]

                        </div>

                        <div class="col-lg-6">




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
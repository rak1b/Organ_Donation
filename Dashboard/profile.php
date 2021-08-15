<?php

session_start();
require 'conn.php';

require 'permission.php';



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
                                    <h1 style="text-align:center; padding-bottom: 15px;"><?php echo $row['fname']; ?>'s Profile</h1>
                                </div>
                                <div class="card-body justify-content-center">


                                    <div class="container bootstrap snippets bootdey">
                                        <div class="panel-body inf-content">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario">
                                                    <ul title="Ratings" class="list-inline ratings text-center">
                                                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                                        <li><b><a href="users/update.php?id=<?php echo $row['id']; ?>">Edit Profile</b> <i class='fa fa-edit'></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <strong>Information</strong><br>
                                                    <div class="table-responsive">
                                                        <table class="table mytable table-bordered table-responsive ">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <strong>
                                                                            Name
                                                                        </strong>
                                                                    </td>
                                                                    <td class="text-primary">
                                                                        <?php echo $row['fname'] . ' ' . $row['lname']; ?>;
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>
                                                                        <strong>
                                                                            Username
                                                                        </strong>
                                                                    </td>
                                                                    <td class="text-primary">
                                                                        <?php echo $row['username']; ?>
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>
                                                                        <strong>
                                                                            <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                                                            Role
                                                                        </strong>
                                                                    </td>
                                                                    <td class="text-primary">
                                                                        <?php if ($row['admin'] == 1) {
                                                                            echo "Admin";
                                                                        } else {
                                                                            echo "Member";
                                                                        } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>
                                                                            <span class="glyphicon glyphicon-envelope text-primary"></span>
                                                                            Email
                                                                        </strong>
                                                                    </td>
                                                                    <td class="text-primary">
                                                                        <?php echo $row['email']; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>
                                                                            <span class="glyphicon glyphicon-calendar text-primary"></span>
                                                                            Phone
                                                                        </strong>
                                                                    </td>
                                                                    <td class="text-primary">
                                                                        <?php echo $row['phone']; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>
                                                                            <span class="glyphicon glyphicon-calendar text-primary"></span>
                                                                            Address
                                                                        </strong>
                                                                    </td>
                                                                    <td class="text-primary">
                                                                        <?php echo $row['address']; ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


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
                        <span>Copyright &copy; 2021 - All Right Reserved</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/dashboard.js"></script>


</body>

</html>
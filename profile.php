<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include('links.php'); ?>
    <style>
        .inf-content {
            border: 1px solid #DDDDDD;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
        }
    </style>

</head>

<body class=".bg-gradient-primary">
    <div class="my_container">

        <?php include('navbar.php'); ?>



        <?php
        $member = $_SESSION['username'];
        require 'conn.php';
        $sql = "SELECT * FROM users WHERE username = '$member'";
        $result = mysqli_query($con, $sql);


        if ($result) {
            // echo "Working";
        } else {
            echo "Not Working";
        }


        while ($row = mysqli_fetch_array($result)) {

        ?>

            <div>
                <h1 style="text-align:center; padding-bottom: 15px;"><?php echo $row['fname']; ?>'s Profile</h1>
            </div>

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
                                <li><b><a href="./dashboard/users/update.php?id=<?php echo $row['id']; ?>">Edit Profile</b> <i class='fa fa-edit'></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <strong>Information</strong><br>
                            <div class="table-responsive">
                                <table class="table table-user-information">
                                    <tbody>
                                        <!-- <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                                    Identification
                                                </strong>
                                            </td>
                                            <td class="text-primary">
                                                <?php echo $row['id']; ?>
                                            </td>
                                        </tr> -->
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-user  text-primary"></span>
                                                    Name
                                                </strong>
                                            </td>
                                            <td class="text-primary">
                                                <?php echo $row['fname']; ?>;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-cloud text-primary"></span>
                                                    Lastname
                                                </strong>
                                            </td>
                                            <td class="text-primary">
                                                <?php echo $row['lname']; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-bookmark text-primary"></span>
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
                                            <?php if($row['admin'] == 1 ){
                                                echo "Admin";

                                            }else{
                                                echo "Member";
                                            }?>
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



    </tr>
<?php




        }

?>
</body>

</html>
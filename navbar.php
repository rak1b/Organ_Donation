<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


  <nav class="navbar border-left-info navbar-expand-lg navbar-light bg-white mb-3 mt-3 shadow" style="height: 82px;">
    <a class="navbar-brand" href="#">Organ Donation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">


      <ul class="navbar-nav ml-auto" style="background: white;padding: 20px;">


        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="organs_Link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Organs
          </a>
          <div class="dropdown-menu" aria-labelledby="organs_Link">
            <a class="dropdown-item" href="organ_donate.php">Donate</a>
            <a class="dropdown-item" href="organ_request.php">Request</a>
          </div>
        </li>

        

        <li class="nav-item">
          <a class="nav-link " href="about.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="contact.php">Contact Us</a>
        </li>

        <?php

        if (!isset($_SESSION['username'])) {

        ?>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Signup</a>
          </li>

          <li class="nav-item">

            <a class="nav-link" href="login.php">Login</a>
          </li>


        <?php

        } else {

        ?>
          <!-- <li class="nav-item">

            <a class="nav-link" href="logout.php">Logout</a>
          </li> -->


        <?php


        }



        ?>
        <li>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </form>
        </li>

        <li class="nav-item dropdown">
          <?php if (isset($_SESSION['username'])) {

          ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="img-profile rounded-circle" src="img/profile.svg">

              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];  ?></span>
            </a>

          <?php
          } else {
          }
          ?>

          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="profile.php">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>


        </li>

      </ul>

    </div>
  </nav>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
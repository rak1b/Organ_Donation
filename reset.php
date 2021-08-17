<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <?php include('links.php'); ?>

</head>

<body class=".bg-gradient-primary">
  <div class="my_container">

    <?php include('navbar.php'); ?>

    <?php
    require 'conn.php';

    if (isset($_POST['email'])) {
      $email = $_POST['email'];
      $select = mysqli_query($con, "select * from users where email='$email' ");

      if (mysqli_num_rows($select) >= 1) {
        // while ($row = mysqli_fetch_array($select))

        //   $email = $row['email'];
    ?>

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
                        <h1 class="h4 text-gray-900 mb-4">Change Your Password:</h1>
                      </div>
                      <form method="post" action="./submit_new.php">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <div class="row align-items-center mt-4">
                          <div class="col">
                            <input type="password" name='password' class="form-control" placeholder="New Password">
                          </div>
                        </div>

                        <div class="row align-items-center mt-4">
                          <div class="col">
                            <input type="re-password" name='re-password' class="form-control" placeholder="Confirm Password">
                          </div>
                        </div>


                        <div class="row justify-content-start mt-4">
                          <div class="col">

                            <button class="btn btn-primary mt-4" type="submit" name="submit_password">Change Password</button>
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


  </div>
<?php
      
    } else {
    

?>
<div class="text-center">
  <h1 class="h4 text-gray-900 mt-5">No Account Found</h1>
</div>
<?php
      }
    } 
    

?>


</body>

</html>
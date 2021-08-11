<?php

if (isset($_POST['name'])) {
    require 'conn.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];



    $sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
    $res = mysqli_query($con, $sql);
    if ($res) {
        echo "<script> alert('Form Submitted'); </script>";
    } else {
        echo "<script> alert('Error Occuurred,Please try again'); </script>";

        echo "ERROR: $sql <br> $con->error";
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
						<div class="col-lg-6 d-none d-lg-block bg-contact"></div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Contact Us</h1>
								</div>
								<form action="contact.php" class="user" method="POST">
									<div class="form-group">
										<input type="text" name='name' class="form-control form-control-user"   placeholder="Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control form-control-user"  name="email" placeholder="Email" required>
									</div>
									<div class="form-group">
									<textarea class="form-control" id="contact_text_area" name="message" placeholder="Message" rows="3" style="border-radius: 40px;"></textarea>
									</div>



									<input href="" type='submit' class="btn btn-primary btn-user btn-block" value="Send Message">
									</input>
									<hr>
									
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
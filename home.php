<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include('links.php'); ?>

</head>

<body class=".bg-gradient-primary">
    <div class="my_container">

        <?php include('navbar.php'); ?>

        <div style="height: calc(100vh - 100px);" class="jumbotron bg-hero">
            <div class="hero_text">
                <h1 class="display-4">We Help to Save Life</h1>
                <p class="lead">Your donation can save someone's life</p>
                <a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up</a>
            </div>

        </div>

        
        <section class="about_section">
      <h1 class="text-center">About Us</h1>





        <div class="deshes-area">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                        <img src="https://images.theconversation.com/files/59470/original/bmc3zndq-1411073854.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=1200.0&fit=crop" alt="" class="box_shadow about_img">
                    </div>
                    <div class="col-lg-6  col-md-6 align-self-center order-1 order-md-2">
                        <div class="deshes-text">
                            <h3><span>Organ Donation </span><br></h3>

                            <p class="pt-3">We provide a blood and transplantation service , looking after blood donation services in Bangladesh and transplant services across the world. This includes managing the donation, storage and transplantation of blood, organs, tissues, bone marrow and stem cells,kidney,eyes and researching new treatments and processes.
                            </p>
                            <p>If you want to work with us or willing to know better.</p>
                            <a href="#" class="template-btn3 mt-3">Contact Us <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        </section>


    </div>



<?php include"footer.php" ?>


</body>

</html>
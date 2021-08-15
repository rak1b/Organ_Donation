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

if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  mysqli_connect('localhost','root','');
  mysqli_select_db($con, 'organ_donate');
  $select=mysqli_query($con, "select email,password from users where email='$email' and password='$pass'");
    
  if(mysqli_num_rows($select)==1)
  {
	      while($row=mysqli_fetch_array($select))
    
      $email=$row['email'];
      
    }
    ?>
    <form method="post" action="./submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
	
	</div>
    <?php
  }

?>

 
 </body>
 </html>
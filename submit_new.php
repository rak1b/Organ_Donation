<?php

require './conn.php';


  $email=$_POST['email'];
  $pass=$_POST['password'];
  mysqli_connect('localhost','root','');
  mysqli_select_db($con, 'donate_organ');
  $select=mysqli_query($con,"update users set password='$pass' where email='$email'");
  echo 'Your Password has been changed Successfully. ';
?>


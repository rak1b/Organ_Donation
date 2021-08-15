<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require '.\vendor\autoload.php';
require '../conn.php';

if(isset($_POST['submit_email']) && $_POST['email'])
{ 
  $email = $_POST['email'];
  mysqli_connect('localhost','root','');
  mysqli_select_db($con,'donate_organ');
  $select=mysqli_query($con, "select email,password from users where email='$email'");
  
  if(mysqli_num_rows($select)==1)
  {
    while($row=mysqli_fetch_array($select))
    {
      $email=$row['email'];
      $pass=$row['password'];
    }
    $link="<a href='localhost/organ/reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    

    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "faisalakandha77@gmail.com";
    // GMAIL password
    $mail->Password = "dummypass";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->setFrom('admin@organdonation.com', 'Admin');
    $mail->addAddress('faisalakandha77@gmail.com', 'Faisal Zubayer');
    $mail->IsHTML(true);
    $mail->Subject  =  'Reset Password';
    
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }	
}
?>
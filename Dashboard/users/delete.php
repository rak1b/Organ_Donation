<?php
require '../conn.php';



$id = $_GET['id'];

$sql = "DELETE FROM `users` WHERE id = '$id';";
$result = mysqli_query($con, $sql);

if($result){
    echo "<script> alert('User Deleted'); </script>";

    echo "<script> location.href='../users.php'; </script>";
  

}else{
    echo "<script> alert('Try again'); </script>";



}
?>
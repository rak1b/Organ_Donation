<?php
require '../conn.php';


$id = $_GET['id'];

$sql = "DELETE FROM `doctors` WHERE id = '$id';";
$result = mysqli_query($con, $sql);

if($result){
    echo "<script> alert('Doctor Deleted'); </script>";

    echo "<script> location.href='../doctors.php'; </script>";
  

}else{
    echo "<script> alert('Try again'); </script>";



}
?>
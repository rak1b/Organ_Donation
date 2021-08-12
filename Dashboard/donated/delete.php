<?php
require '../conn.php';



$id = $_GET['id'];

$sql = "DELETE FROM `organs` WHERE id = '$id';";
$result = mysqli_query($con, $sql);

if($result){
    echo "<script> alert('Deleted Successfully'); </script>";

    echo "<script> location.href='../organs.php'; </script>";
  

}else{
    echo "<script> alert('Try again'); </script>";



}
?>
<?php
require '../conn.php';


$id = $_GET['id'];

$sql = "DELETE FROM `requested` WHERE id = '$id';";
$result = mysqli_query($con, $sql);

if($result){
    echo "<script> alert('Deleted Successfully'); </script>";

    echo "<script> location.href='../requested_organ.php'; </script>";
  

}else{
    echo "<script> alert('Try again'); </script>";



}
?>
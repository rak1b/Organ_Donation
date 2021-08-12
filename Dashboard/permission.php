<?php

$admin_username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username = '$admin_username'  and admin = 1 ";
$res = mysqli_query($con, $sql);

$row = mysqli_fetch_array($res);



$count = mysqli_num_rows($res);
if ($count != 1) {
    echo "<script> location.href='../home.php'; </script>";

}

?>
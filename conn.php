<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = 'donate_organ';
    
        $con = mysqli_connect($server, $username, $password,$db);
        if (!$con) {
            die("Connection Failed : " . mysqli_connect_error());
        }
    
?>

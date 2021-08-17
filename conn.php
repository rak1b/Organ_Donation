<?php
      // $server = "sql311.epizy.com";
      // $username = "epiz_29455265";
      // $password = "Y00F0t9kSF";
      // $db = 'epiz_29455265_organ_donate';

      $server = "localhost";
      $username = "root";
      $password = "";
      $db = 'donate_organ';
    
        $con = mysqli_connect($server, $username, $password,$db);
        if (!$con) {
            die("Connection Failed : " . mysqli_connect_error());
        }
    
?>

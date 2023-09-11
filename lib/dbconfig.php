<?php
    $server = "localhost";
    $user = "root";
    $pass= "";
    $db = "website_maxauto";
        
    $con = mysqli_connect($server, $user, $pass, $db) or die(mysqli_error($con));
<?php
    $host = "localhost:3308";
    $user = "root";                     
    $pass = "";                                  
    $db = "ticketbooking";
    $port = 3308;
     $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
?>
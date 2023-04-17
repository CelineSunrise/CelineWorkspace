<?php
    $hostname = 'localhost';
    $dbuserid = 'celine117';
    $dbpasswd = 'sun900326**';
    $dbname = 'celine117';

    $mysqli = new mysqli($hostname,$dbuserid, $dbpasswd,$dbname);
    if($mysqli -> connect_errno){
        die('Connect Error:'.$mysqli->connect_error);
    } 
    // echo 'connect successfully';
?>
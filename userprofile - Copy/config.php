<?php
    $con = new mysqli("localhost","root","","userregistration");


    if($con->connect_error)
    {
        die("Connection Fail:".$con->connect_error);
    }
?>
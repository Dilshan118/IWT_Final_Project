<?php
    $con = new mysqli("localhost","root","","ISDM_Final_DB");


    if($con->connect_error)
    {
        die("Connection Fail:".$con->connect_error);
    }
?>
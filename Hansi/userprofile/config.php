<?php
    $con = new mysqli("localhost","root","","isdm_final_db");


    if($con->connect_error)
    {
        die("Connection Fail:".$con->connect_error);
    }
?>
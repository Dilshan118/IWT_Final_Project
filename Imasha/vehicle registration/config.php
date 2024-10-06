<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$db="vehiclems";

$con = new mysqli("localhost", "root", "", "ISDM_Final_DB");

if($con->connect_error)
{
    die("Connection failed: " . $con->connect_error);
}


?>
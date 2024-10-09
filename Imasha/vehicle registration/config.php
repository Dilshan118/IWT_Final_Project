<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$db="isdm_final_db";

$con = new mysqli("localhost", "root", "", "isdm_final_db");

if($con->connect_error)
{
    die("Connection failed: " . $con->connect_error);
}


?>
<?php
$con = new mysqli("localhost", "root", "", "isdm_final_db");

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}
?>

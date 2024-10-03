<?php
$con = new mysqli("localhost", "root", "", "payment_details");

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}
?>

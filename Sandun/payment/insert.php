<?php
require 'config.php';

// Retrieve data 
$username = $_POST["username"];
$email = $_POST["email"];
$pay = $_POST["pay"];
$vehicleid = $_POST["vehicleid"];
$billinginfo = $_POST["billinginfo"];
$cardnumber = $_POST["cardnumber"];
$expirationdate = $_POST["expirationdate"];
$cvv = $_POST["cvv"];

// Insert 
$sql = "INSERT INTO payment (UserName, Email, PaymentAmount, VehicleID, BillingInformation, CardNumber, ExpirationDate, CVV) 
        VALUES ('$username', '$email', '$pay', '$vehicleid', '$billinginfo', '$cardnumber', '$expirationdate', '$cvv')";

if ($con->query($sql)) {
    $last_id = $con->insert_id; // Get 

    // Redirect 
    header("Location: read.php?pid=$last_id");
    exit();
} else {
    echo "Error: " . $con->error;
}
?>

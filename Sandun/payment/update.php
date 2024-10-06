<?php
require 'config.php';

// Retrieve 
$paymentid = $_POST["pid"];
$username = $_POST["username"];
$email = $_POST["email"];
$pay = $_POST["pay"];
$vehicleid = $_POST["vehicleid"];
$billinginfo = $_POST["billinginfo"];
$cardnumber = $_POST["cardnumber"];
$expirationdate = $_POST["expirationdate"];
$cvv = $_POST["cvv"];

// Check field is empty
if (empty($paymentid) || empty($username) || empty($email) || empty($pay) || empty($vehicleid) || 
    empty($billinginfo) || empty($cardnumber) || empty($expirationdate) || empty($cvv)) {
    echo "<script>
        alert('All fields are REQUIRED.');
        window.history.back();
    </script>";
    exit();
} else {
    // update
    $sql = "UPDATE payment SET 
        UserName = '$username', 
        Email = '$email', 
        PaymentAmount = '$pay', 
        VehicleID = '$vehicleid', 
        BillingInformation = '$billinginfo', 
        CardNumber = '$cardnumber', 
        ExpirationDate = '$expirationdate', 
        CVV = '$cvv' 
        WHERE PaymentID = '$paymentid'";

    // Execute  query
    if ($con->query($sql) === TRUE) {
        // Redirect 
        header("Location: read.php?pid=$paymentid");
        exit();
    } else {
        echo "Error updating payment details: " . $con->error;
    }
}

$con->close();
?>

<?php
require 'config.php';

$vehicleID = $_POST["id"];
$userID = $_POST["uid"];
$userName = $_POST["fullname"];
$userMobile = $_POST["mobile"];
$userEmail = $_POST["email"];
$vehicleNo = $_POST["plateNo"];
$vehicleModel = $_POST["model"];
$vehicleYear = $_POST["year"];
$vehicleColor = $_POST["color"];
$type = $_POST["vehicleType"];

// Insert data
$sql = "INSERT INTO vehicle (VehicleID, UserID, FullName, MobileNumber, Email, LicensePlateNo, Model, Year, Color, VehicleType) 
VALUES ('$vehicleID', '$userID', '$userName', '$userMobile', '$userEmail', '$vehicleNo', '$vehicleModel', '$vehicleYear', '$vehicleColor', '$type')";

if ($con->query($sql) === TRUE) {
    echo "<script>
            alert('Registration Successful!');
            window.location.href = 'read.php?id=$vehicleID';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>



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

// Update data
$sql = "UPDATE vehicle SET UserID='$userID', FullName='$userName', MobileNumber='$userMobile', Email='$userEmail', 
        LicensePlateNo='$vehicleNo', Model='$vehicleModel', Year='$vehicleYear', Color='$vehicleColor', VehicleType='$type' 
        WHERE VehicleID='$vehicleID'";

if ($con->query($sql) === TRUE) {
    echo "<script>
            alert('Details updated successfully!');
            window.location.href = 'read.php?id=$vehicleID';
          </script>";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>


<?php
require 'config.php';

$vehicleID = $_GET['id'];

$sql = "SELECT * FROM vehicle WHERE VehicleID='$vehicleID'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<div class='profile-card'>
            <h2>Vehicle Details</h2>
            <p><strong>Vehicle ID:</strong> " . $row["VehicleID"] . "</p>
            <p><strong>User ID:</strong> " . $row["UserID"] . "</p>
            <p><strong>Full Name:</strong> " . $row["FullName"] . "</p>
            <p><strong>Mobile:</strong> " . $row["MobileNumber"] . "</p>
            <p><strong>Email:</strong> " . $row["Email"] . "</p>
            <p><strong>Plate No:</strong> " . $row["LicensePlateNo"] . "</p>
            <p><strong>Model:</strong> " . $row["Model"] . "</p>
            <p><strong>Year:</strong> " . $row["Year"] . "</p>
            <p><strong>Color:</strong> " . $row["Color"] . "</p>
            <p><strong>Vehicle Type:</strong> " . $row["VehicleType"] . "</p>
            <a href='updateregister.php?id=" . $row["VehicleID"] . "'><button>Update</button></a>
            <a href='deleteregister.php?id=" . $row["VehicleID"] . "'><button>Delete</button></a>
          </div>";
} else {
    echo "No results found.";
}

$con->close();
?>

<!DOCTYPE HTML>
<html>
<head>
   <title> ParkPal Swift </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <link rel = "stylesheet" href = "styles.css">
</head>
</html>

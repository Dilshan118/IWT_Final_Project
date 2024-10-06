<?php
require 'reserveconfig.php'; //  connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data
    $reservationID = $_POST['reservationID'];
    $spotID = $_POST['spotID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $duration = $_POST['duration'];

    // Update
    $update_sql = "UPDATE reservation SET SpotID='$spotID', Name='$name', Email='$email', Date='$date', Time='$time', Duration='$duration' WHERE ReservationID='$reservationID'";
    
    if ($conn->query($update_sql) === TRUE) {
        // Redirect 
        header("Location: reserveread.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close 
    $conn->close();
}
?>

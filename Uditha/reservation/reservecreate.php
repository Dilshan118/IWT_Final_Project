<?php
// configuration 
include 'reserveconfig.php';

// Check form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $spotID = $_POST['spotID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $duration = $_POST['duration'];

    // Insert to the database
    $sql = "INSERT INTO reservation (SpotID, Name, Email, Date, Time, Duration) 
            VALUES ('$spotID', '$name', '$email', '$date', '$time', '$duration')";

    if ($conn->query($sql) === TRUE) {
        // Redirect 
        $last_id = $conn->insert_id;
        header("Location: reserveread.php?reservation_id=$last_id&status=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

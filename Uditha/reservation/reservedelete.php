<?php
// Include the database connection
include('reserveconfig.php');

// Handle deletion of an inquiry
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $sql = "DELETE FROM reservation WHERE 	ReservationID = $id";

  if ($conn->query($sql) === TRUE) {
    header('Location: reservation.php'); // Redirect back to main page after deletion
    exit();
  } else {
    echo "Error deleting inquiry: " . $conn->error;
  }
}

$conn->close();
?>

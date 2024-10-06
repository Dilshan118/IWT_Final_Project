<?php
// Include the database connection
include('db_connection.php');

// Handle deletion of an inquiry
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $sql = "DELETE FROM inquiries WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    header('Location: index.php'); // Redirect back to main page after deletion
    exit();
  } else {
    echo "Error deleting inquiry: " . $conn->error;
  }
}

$conn->close();
?>

<?php
// Include the database connection
include('db_connection.php');

// Handle deletion of an inquiry
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $sql = "DELETE FROM inquiries WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Successfully!');
    window.location.href='index.php'</script>";
    exit();
  } else {
    echo "Error deleting inquiry: " . $conn->error;
  }
}

$conn->close();
?>

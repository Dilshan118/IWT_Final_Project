<?php
include 'db_config.php';

// Handle form submission (add new inquiry)
if (isset($_POST['submit-inquiry'])) {
  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $vehicle = $_POST['vehicle'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $comments = $_POST['comments'];

  // Insert inquiry into the database
  $sql = "INSERT INTO inquiries (first_name, last_name, email, phone, vehicle, date, time, comments)
          VALUES ('$firstName', '$lastName', '$email', '$phone', '$vehicle', '$date', '$time', '$comments')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert'New inquiry submitted successfully.'</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Handle deletion of an inquiry
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $id = $conn->real_escape_string($id);

  $sql = "DELETE FROM inquiries WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    echo "Inquiry deleted successfully.";
    header('Location: index.php');  // Redirect after deletion to avoid form re-submission
    exit();
  } else {
    echo "Error deleting inquiry: " . $conn->error;
  }
}

// Handle fetching data for editing an inquiry
$firstName = $lastName = $email = $phone = $vehicle = $date = $time = $comments = "";
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];

  $sql = "SELECT * FROM inquiries WHERE id = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $vehicle = $row['vehicle'];
    $date = $row['date'];
    $time = $row['time'];
    $comments = $row['comments'];
  }
}

// Handle updating an inquiry
if (isset($_POST['edit-inquiry'])) {
  $id = $_POST['inquiry-id'];
  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $vehicle = $_POST['vehicle'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $comments = $_POST['comments'];

  $sql = "UPDATE inquiries SET first_name='$firstName', last_name='$lastName', email='$email', 
          phone='$phone', vehicle='$vehicle', date='$date', time='$time', comments='$comments' 
          WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    echo "Inquiry updated successfully.";
    header('Location: index.php');  // Redirect to avoid re-submission on page refresh
    exit();
  } else {
    echo "Error updating inquiry: " . $conn->error;
  }
}
?>
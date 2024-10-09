<?php
// Include the database connection
include('db_connection.php');

// Handle form submission to add a new inquiry
if (isset($_POST['submit-inquiry']))
 {
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

  if ($conn->query($sql) === TRUE)
  {
    echo "<script>alert('New inquiry submitted successfully.');
    window.location.href='index.php'</script>";

    exit();
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>

<?php
// updateInquiry.php

include 'db_connection.php';

// Step 1: Fetch the current inquiry details to pre-fill the form
if (isset($_GET['edit'])) 
{ // Use 'edit' instead of 'id'
    $id = $_GET['edit'];
    
    // Validate that ID is numeric to prevent SQL injection
    if (is_numeric($id))
     {
        $sql = "SELECT * FROM inquiries WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
          $row = $result->fetch_assoc();

          // Assign fetched data to variables to pre-fill the form
          $firstName = $row['first_name'];
          $lastName = $row['last_name'];
          $email = $row['email'];
          $phone = $row['phone'];
          $vehicle = $row['vehicle'];
          $date = $row['date'];
          $time = $row['time'];
          $comments = $row['comments'];
        } 
        else 
        {
          echo "<script>alert('No inquiry found with the provided ID.')</script>";
          exit();
        }
    }
    else 
    {
      echo "<script>alert('Invalid ID.')</script>";
      exit();
    }
}

// Step 2: Handle form submission to update the inquiry details
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
 {
    $id = $_POST['inquiry-id']; // Retrieve the hidden ID field

    // Collect the form data
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $vehicle = $_POST['vehicle'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $comments = $_POST['comments'];

    // Prepare the SQL update query
    $sql = "UPDATE inquiries SET 
            first_name='$firstName', 
            last_name='$lastName', 
            email='$email', 
            phone='$phone', 
            vehicle='$vehicle', 
            date='$date', 
            time='$time', 
            comments='$comments' 
            WHERE id=$id";

    // Execute the query and check if successful
    if ($conn->query($sql) === TRUE) 
    {
        // Redirect back to index.php with success message
        echo "<script>alert('Successfully!');
        window.location.href='index.php?success=1'</script>";
        exit();
    } 
    else 
    {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!-- HTML Form for updating inquiry -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Inquiry</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="main-content">
        <div class="container" id="inquiry">
            <h1 class="form-title">Update Inquiry</h1>
            
            <!-- Form for updating the inquiry -->
            <form method="POST" action="updateInquiry.php">
                <!-- Hidden field to store the ID -->
                <input type="hidden" name="inquiry-id" value="<?php echo isset($id) ? $id : ''; ?>">

                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="first-name" id="first-name" placeholder="First Name" value="<?php echo isset($firstName) ? $firstName : ''; ?>" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="last-name" id="last-name" placeholder="Last Name" value="<?php echo isset($lastName) ? $lastName : ''; ?>" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="phone" id="phone" placeholder="Phone Number" value="<?php echo isset($phone) ? $phone : ''; ?>" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-car"></i>
                    <input type="text" name="vehicle" id="vehicle" placeholder="Vehicle Details" value="<?php echo isset($vehicle) ? $vehicle : ''; ?>" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-calendar"></i>
                    <input type="date" name="date" id="date" value="<?php echo isset($date) ? $date : ''; ?>" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-clock"></i>
                    <input type="time" name="time" id="time" value="<?php echo isset($time) ? $time : ''; ?>" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-comments"></i>
                    <textarea name="comments" id="comments" rows="4" placeholder="Additional Comments"><?php echo isset($comments) ? $comments : ''; ?></textarea>
                </div>

                <!-- Submit button -->
                <input type="submit" class="btn" id="submit" name="submit" value="Update Inquiry">
            </form>
        </div>
    </div>
</body>
</html>

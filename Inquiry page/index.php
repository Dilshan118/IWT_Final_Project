<?php
include 'form_handler.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Parking Inquiry Form</title>
  <link rel="stylesheet" href="style.css">
  <script src="faq.js" defer></script> <!-- Linking to the external FAQ JavaScript file -->
</head>
<body>
  <div class="main-content">
    <div class="container" id="inquiry">
      <h1 class="form-title">Parking Inquiry</h1>

      <form method="POST" action="index.php">
        <!-- Hidden field to store ID when editing -->
        <input type="hidden" name="inquiry-id" value="<?php echo isset($id) ? $id : ''; ?>">

        <div class="input-group">
          <input type="text" name="first-name" placeholder="First Name"
                 value="<?php echo isset($firstName) ? $firstName : ''; ?>" required>
        </div>

        <div class="input-group">
          <input type="text" name="last-name" placeholder="Last Name"
                 value="<?php echo isset($lastName) ? $lastName : ''; ?>" required>
        </div>

        <div class="input-group">
          <input type="email" name="email" placeholder="Email"
                 value="<?php echo isset($email) ? $email : ''; ?>" required>
        </div>

        <div class="input-group">
          <input type="tel" name="phone" placeholder="Phone Number"
                 value="<?php echo isset($phone) ? $phone : ''; ?>" required>
        </div>

        <div class="input-group">
          <input type="text" name="vehicle" placeholder="Vehicle Details"
                 value="<?php echo isset($vehicle) ? $vehicle : ''; ?>" required>
        </div>

        <div class="input-group">
          <input type="date" name="date"
                 value="<?php echo isset($date) ? $date : ''; ?>" required>
        </div>

        <div class="input-group">
          <input type="time" name="time"
                 value="<?php echo isset($time) ? $time : ''; ?>" required>
        </div>

        <div class="input-group">
          <textarea name="comments" rows="4" placeholder="Additional Comments"><?php echo isset($comments) ? $comments : ''; ?></textarea>
        </div>

        <div class="submit-section">
          <input type="submit" class="btn" name="<?php echo isset($id) ? 'edit-inquiry' : 'submit-inquiry'; ?>"
               value="<?php echo isset($id) ? 'Update Inquiry' : 'Submit Inquiry'; ?>">
        </div>
      </form>
    </div>

    <div class="container" id="preview">
      <h2>Inquiry Preview</h2>
      <table border="1">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Vehicle</th>
          <th>Date</th>
          <th>Time</th>
          <th>Comments</th>
          <th>Actions</th>
        </tr>

        <?php
        $sql = "SELECT * FROM inquiries";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['vehicle'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['comments'] . "</td>";
            echo "<td>
                    <a href='index.php?delete=" . $row['id'] . "' class='btn delete-btn'>Delete</a>
                    <a href='index.php?edit=" . $row['id'] . "' class='btn edit-btn'>Edit</a>
                  </td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='10'>No inquiries found.</td></tr>";
        }
        ?>
      </table>

    <button class = "btn" type = "button" id = "faq-btn" onclick = "loadFAQ()">FAQ</button>
    </div>

    <!-- Hidden FAQ section that will be shown using JavaScript -->
    <div id="faq-section">
      <h3>Frequently Asked Questions</h3>
      <div id="faq-content">
         <p ID="faq-content-para"><h4>Click on the FAQ button to view the frequintly asked Questions</h4></P>
      </div>
    </div>
  </div>
</body>
</html>

<?php $conn->close(); ?>

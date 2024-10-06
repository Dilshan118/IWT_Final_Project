<?php
// Include the database connection
include('db_connection.php');

// Fetch all inquiries from the database
$sql = "SELECT * FROM inquiries";
$result = $conn->query($sql);

echo '<div class="container" id="preview">';
echo '<h2>Inquiry Preview</h2>';
echo '<table border="1">';
echo '<tr>
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
      </tr>';

if ($result->num_rows > 0) 
{
  while ($row = $result->fetch_assoc()) 
  {
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
            <a href='deleteInquiry.php?delete=" . $row['id'] . "' class='btn delete-btn'>Delete</a>
            <a href='updateInquiry.php?edit=" . $row['id'] . "' class='btn edit-btn'>Edit</a>
          </td>";
    echo "</tr>";
  }
} 
else 
{
  echo "<tr><td colspan='10'>No inquiries found.</td></tr>";
}

echo '</table>';
echo '</div>';

$conn->close();
?>

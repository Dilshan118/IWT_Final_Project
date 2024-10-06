<?php
require 'reserveconfig.php';

$reservationID = $_GET['id']; // Get the reservation ID from the URL

// Use prepared statements to prevent SQL injection
$stmt = $con->prepare("SELECT * FROM reservation WHERE ReservationID = ?");
$stmt->bind_param("i", $reservationID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No Reservation found";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reservation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Update Reservation</title>
</head>
<body>

<header>
    <div class="header-content">
        <h1>Update Your Reservation</h1>
    </div>
</header>

<main>
    <div class="reservation-form">
        <form action="reserveupdate.php" method="post">
            <input type="hidden" name="reservationID" value="<?php echo $row['ReservationID']; ?>"> <!-- Hidden field for reservation ID -->

            <label for="spotID">Spot ID:</label>
            <input type="text" id="spotID" name="spotID" value="<?php echo htmlspecialchars($row['SpotID']); ?>" required readonly><br>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['Name']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['Email']); ?>" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($row['Date']); ?>" required>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" value="<?php echo htmlspecialchars($row['Time']); ?>" required>

            <label for="duration">Duration (hours):</label>
            <select id="duration" name="duration" required>
                <option value="1" <?php if ($row['Duration'] == 1) echo 'selected'; ?>>1 Hour</option>
                <option value="2" <?php if ($row['Duration'] == 2) echo 'selected'; ?>>2 Hours</option>
                <option value="3" <?php if ($row['Duration'] == 3) echo 'selected'; ?>>3 Hours</option>
                <option value="4" <?php if ($row['Duration'] == 4) echo 'selected'; ?>>4 Hours</option>
                <option value="5" <?php if ($row['Duration'] == 5) echo 'selected'; ?>>5 Hours</option>
            </select>

            <button type="submit">Update Reservation</button>
        </form>
    </div>
</main>

<footer>
    <div class="footer-content">
        <p>&copy; 2024 Automated Parking Reservation. All rights reserved.</p>
    </div>
</footer>

</body>
</html>

<?php
$stmt->close();
$con->close();
?>

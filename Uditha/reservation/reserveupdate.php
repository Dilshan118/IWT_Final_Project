<?php
require 'reserveconfig.php'; // Database connection

// Get the Reservation ID from the URL
$reservationID = $_GET['ReservationID'];

// Fetch the reservation details based on ReservationID
$sql = "SELECT * FROM reservation WHERE ReservationID = '$reservationID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Reservation not found.";
    exit();
}

// Update the reservation details when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $spotID = $_POST['spotID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $duration = $_POST['duration'];

    $update_sql = "UPDATE reservation SET SpotID='$spotID', Name='$name', Email='$email', Date='$date', Time='$time', Duration='$duration' WHERE ReservationID='$reservationID'";
    
    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Reservation updated successfully!'); window.location.href = 'reserveread.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="header&footer.css">
    <style>
        .reservation-form {
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 5px;
            margin: 20px auto;
            width: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .reservation-form input, .reservation-form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .reservation-form button {
            background-color: #00796b; 
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .reservation-form button:hover {
            background-color: #005f57;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="pps-header">
        <div class="pps-container">
            <div class="pps-logo">Park Pal Swift</div>
            <nav class="pps-nav">
                <ul class="pps-nav-list">
                <li><a href="../../Hansi/home/home.html" class="pps-nav-link">Home</a></li>
                         <li><a href="../../Imasha/vehicle registration/About.php" class="pps-nav-link">About</a></li>
                         <li><a href="../../Hansi/packages/package.html" class="pps-nav-link">Package</a></li>
                         <li><a href="../../Dilshan/contac us/index.php" class="pps-nav-link">Contact</a></li>
                         <li><a href="../../Uditha/reservation/reservation.php" class="pps-nav-link">Reservation</a></li>
                         <li><a href="../../Imasha/vehicle registration/Register.php" class="pps-nav-link">Registration</a></li>
                         <li><a href="../../Sandun/payment/index.php" class="pps-nav-link">Payment</a></li>
                         <li><a href="../../hansi/userprofile/logout.php" class="pps-nav-btn">Log Out</a></li>
                         <li><a href="../../hansi/userprofile/read.php" class="pps-nav-btn">Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Edit Form (similar to the reservation form) -->
    <div class="reservation-form">
        <h2>Edit Reservation</h2>
        <form method="POST">
            <label for="spotID">Spot ID:</label>
            <input type="text" id="spotID" name="spotID" value="<?php echo $row['SpotID']; ?>" required><br>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['Name']; ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['Email']; ?>" required><br>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="<?php echo $row['Date']; ?>" required><br>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" value="<?php echo $row['Time']; ?>" required><br>

            <label for="duration">Duration (hours):</label>
            <select id="duration" name="duration" required>
                <option value="1" <?php if($row['Duration'] == 1) echo 'selected'; ?>>1 Hour</option>
                <option value="2" <?php if($row['Duration'] == 2) echo 'selected'; ?>>2 Hours</option>
                <option value="3" <?php if($row['Duration'] == 3) echo 'selected'; ?>>3 Hours</option>
                <option value="4" <?php if($row['Duration'] == 4) echo 'selected'; ?>>4 Hours</option>
                <option value="5" <?php if($row['Duration'] == 5) echo 'selected'; ?>>5 Hours</option>
            </select>

            <button type="submit">Update Reservation</button>
        </form>
    </div>

    <!-- Footer Section -->
    <footer class="pps-footer-dark">
        <div class="pps-footer-container">
            <div class="pps-footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="pps-footer-info">
                <div class="pps-footer-item">
                    <h3>Hotline 24 Hours</h3>
                    <p>+94 779 560 462</p>
                </div>
                <div class="pps-footer-item">
                    <h3>Send us a Mail</h3>
                    <p>matrix@slmatrix.com</p>
                </div>
                <div class="pps-footer-item">
                    <h3>Our Location</h3>
                    <p>No 850, Bulugaha Junction, Kelaniya, Sri Lanka</p>
                </div>
            </div>
            <div class="pps-footer-columns">
                <div class="pps-footer-item">
                    <h3>Who we are</h3>
                    <p>Park Pal Swift offers seamless automated parking solutions that are efficient, reliable, and customer-focused.</p>
                </div>
                <div class="pps-footer-item">
                    <h3>Opening Hours</h3>
                    <p>Monday-Friday: 8:30AM - 5:00PM</p>
                    <p>Saturday: 8:30AM - 1:00PM</p>
                    <p>Sunday: Closed</p>
                </div>
                <div class="pps-footer-item">
                    <h3>Important Links</h3>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pps-footer-bottom">
            <p>&copy; 2024 Park Pal Swift. All rights reserved | Solution by YourCompany</p>
        </div>
    </footer>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

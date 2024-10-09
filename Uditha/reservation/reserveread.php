<?php
require 'reserveconfig.php'; // Database connection file

// Fetch the last reservation from the database
$sql = "SELECT * FROM reservation ORDER BY ReservationID DESC LIMIT 1";
$result = $conn->query($sql);

// Handle delete functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $reservationID = $_POST['ReservationID'];

    // Delete the reservation
    $delete_sql = "DELETE FROM reservation WHERE ReservationID = '$reservationID'";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Reservation deleted successfully!'); window.location.href = 'reserveread.php';</script>";
    } else {
        echo "Error deleting reservation: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Reservation Bill</title>
    <link rel="stylesheet" href="header&footer.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .bill-container {
            background-color: #fff;
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .bill-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e0e0e0;
        }

        .bill-header h1 {
            margin: 0;
            font-size: 24px;
            color: #00796b;
        }

        .bill-details {
            margin-top: 20px;
        }

        .bill-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .bill-details th, .bill-details td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .bill-details th {
            background-color: #00796b;
            color: #fff;
        }

        .btn-group {
            margin-top: 20px;
            text-align: center;
        }

        .btn-group button {
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-edit {
            background-color: #1abc9c;
            color: white;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }

        .btn-edit:hover {
            background-color: #16a085;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        .bill-footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 10px;
            border-top: 2px solid #e0e0e0;
        }

        .bill-footer p {
            margin: 0;
            color: #555;
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
                         <li><a href="../../Imasha/vehicle registration/About.php" class="pps-nav-link">About Us</a></li>
                         <li><a href="../../Hansi/packages/package.html" class="pps-nav-link">Package Details</a></li>
                         <li><a href="../../Dilshan/contac us/index.php" class="pps-nav-link">Contact</a></li>
                         <li><a href="../../Uditha/reservation/reservation.php" class="pps-nav-link">Reservation</a></li>
                         <li><a href="../../Imasha/vehicle registration/Register.php" class="pps-nav-link">Vehicle Registration</a></li>
                         <li><a href="../../Sandun/payment/index.php" class="pps-nav-link">Payment</a></li>
                         <li><a href="../../hansi/userprofile/logout.php" class="pps-nav-btn">LogOut</a></li>
                         <li><a href="../../hansi/userprofile/read.php" class="pps-nav-btn">User Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Bill Section -->
    <div class="bill-container">
        <div class="bill-header">
            <h1>Reservation Bill</h1>
        </div>

        <?php if ($result->num_rows > 0): ?>
            <?php $row = $result->fetch_assoc(); ?>
            <div class="bill-details">
                <table>
                    <tr>
                        <th>Reservation ID</th>
                        <td><?php echo $row['ReservationID']; ?></td>
                    </tr>
                    <tr>
                        <th>Spot ID</th>
                        <td><?php echo $row['SpotID']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['Name']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $row['Email']; ?></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><?php echo $row['Date']; ?></td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td><?php echo $row['Time']; ?></td>
                    </tr>
                    <tr>
                        <th>Duration</th>
                        <td><?php echo $row['Duration']; ?> hours</td>
                    </tr>
                </table>
            </div>

            <div class="btn-group">
                <!-- Edit Button -->
                <a href="reserveupdate.php?ReservationID=<?php echo $row['ReservationID']; ?>">
                    <button class="btn-edit">Edit</button>
                </a>

                <!-- Delete Button -->
                <form method="POST" action="" style="display:inline;">
                    <input type="hidden" name="ReservationID" value="<?php echo $row['ReservationID']; ?>">
                   <?php echo"<a href='reservedelete.php?delete=" .$row['ReservationID'] . "' class='btn delete-btn'>Delete</a>";?>
                </form>
            </div>

            <div class="bill-footer">
                <p>Thank you for using Park Pal Swift</p>
                <p>Contact Us: +94 779 560 462 | matrix@slmatrix.com</p>
            </div>
        <?php else: ?>
            <p class="success-msg">No reservation found.</p>
        <?php endif; ?>
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

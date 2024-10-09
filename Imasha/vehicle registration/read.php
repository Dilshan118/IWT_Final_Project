<!DOCTYPE html>
<html>
<head>
    
    <title>User Registration</title>

    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="styles/header&footer.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>


<body>
    
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
                         <li><a href="../../hansi/userprofile/logout.php" class="pps-nav-btn">LogOut</a></li>
                         <li><a href="../../hansi/userprofile/read.php" class="pps-nav-btn">Profile</a></li>

                    </ul>
                </nav>
            </div>
        </header>
<?php
require 'config.php';

$vehicleID = $_GET['id'];

$sql = "SELECT * FROM vehicle WHERE VehicleID='$vehicleID'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<div class='profile-card'>
            <h2>Vehicle Details</h2>
            <p><strong>Vehicle ID:</strong> " . $row["VehicleID"] . "</p>
            <p><strong>User ID:</strong> " . $row["UserID"] . "</p>
            <p><strong>Full Name:</strong> " . $row["FullName"] . "</p>
            <p><strong>Mobile:</strong> " . $row["MobileNumber"] . "</p>
            <p><strong>Email:</strong> " . $row["Email"] . "</p>
            <p><strong>Plate No:</strong> " . $row["LicensePlateNo"] . "</p>
            <p><strong>Model:</strong> " . $row["Model"] . "</p>
            <p><strong>Year:</strong> " . $row["Year"] . "</p>
            <p><strong>Color:</strong> " . $row["Color"] . "</p>
            <p><strong>Vehicle Type:</strong> " . $row["VehicleType"] . "</p>
            <a href='updateregister.php?id=" . $row["VehicleID"] . "'><button>Update</button></a>
            <a href='deleteregister.php?id=" . $row["VehicleID"] . "'><button>Delete</button></a>
          </div>";
} else {
    echo "No results found.";
}

$con->close();
?>

   <!--footer open-->
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

                <div class="pps-footer-item">
                    <h3>Recent Posts</h3>
                    <ul>
                        <li><a href="#">New Automated Features for 2023</a></li>
                        <li><a href="#">Award-Winning Service Recognition</a></li>
                        <li><a href="#">Expansion into New Locations</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="pps-footer-bottom">
            <p>&copy; 2024 Park Pal Swift. All rights reserved | Solution by YourCompany</p>
        </div>
    </footer>    <!--close footer-->

</body>
</html>

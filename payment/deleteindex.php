<!DOCTYPE html>
<html>
<head>
    <title>Delete Payment Record</title>
    <link rel="stylesheet" href="styles/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>

<?php
        require 'config.php';
?>
<header>
   <header class="pps-header">
        <div class="pps-container">
            <div class="pps-logo">Park Pal Swift</div>
            <nav class="pps-nav">
                <ul class="pps-nav-list">
                    <li><a href="#about-us" class="pps-nav-link">About Us</a></li>
                    <li><a href="#package-details" class="pps-nav-link">Package Details</a></li>
                    <li><a href="#contact-us" class="pps-nav-link">Contact Us</a></li>
                    <li><a href="#reservation" class="pps-nav-link">Reservation</a></li>
                    <li><a href="#vehicle-registration" class="pps-nav-link">Vehicle Registration</a></li>
                    <li><a href="#payment" class="pps-nav-link">Payment</a></li>
                    <li><a href="#login" class="pps-nav-btn">Login</a></li>
                    <li><a href="#user-profile" class="pps-nav-btn">User Profile</a></li>
                </ul>
            </nav>
        </div>
</header>
    <div class="delete-container">
        <h2>Delete Payment Record</h2>
        <form action="delete.php" method="post">
            <div class="input-group">
                <label for="paymentid">Payment ID :</label><br />
                <input type="number" name="paymentid" required><br /><br />
            </div>

            <div class="input-group">
                <input type="submit" name="Submit" class="Submit" value="Delete">
            </div>
        </form>
    </div>
<    <footer class="pps-footer-dark">
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
                    <p>Park Pal Swift offers seamless automated parking solutions that are efficient, reliable, and customer-focused. Our goal is to improve the parking experience with innovative technology and exceptional service.</p>
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
</footer>
</body>
</html>

<!DOCTYPE html>
<head>

    <title>Payment Form</title>
    <link rel="stylesheet" href="styles/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script>
        function enableButton() {
            // Enables or disables t
            document.getElementById("Submit").disabled = !document.getElementById("privacy").checked;
        }
    </script>
</head>
<body>
<header>
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
    <?php
    require 'config.php'; 
    ?>

    <div class="payment-container">
        <h2>Payment Details</h2>
        <fieldset>
            <form action="insert.php" method="post">
                <!-- User Name  -->
                <div class="input-group">
                    <label for="username">User Name:</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <!-- Email  -->
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}">
                </div>

                <!-- Payment Amount  -->
                <div class="input-group">
                    <label for="payment">Payment Amount:</label>
                    <input type="text" name="pay" id="pay" required >
                </div>

                <!-- Vehicle ID  -->
                <div class="input-group">
                    <label for="vehicleid">Vehicle ID:</label>
                    <input type="text" name="vehicleid" id="vehicleid" required>
                </div>

                <!-- Payment Method  -->
                <div class="input-group">
                    <label for="billinginfo">Payment Method:</label>
                    <select name="billinginfo" id="billinginfo" required>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                    </select>
                </div>

                <!-- Card Number  -->
                <div class="input-group">
                    <label for="cardnumber">Card Number:</label>
                    <input type="text" name="cardnumber" id="cardnumber" required pattern="[0-9]{16}" maxlength="16">
                </div>

                <!-- Expiration Date  -->
                <div class="input-group">
                    <label for="expirationdate">Expiration Date:</label>
                    <input type="month" name="expirationdate" id="expirationdate" required>
                </div>

                <!-- CVV  -->
                <div class="input-group">
                    <label for="cvv">CVV:</label>
                    <input type="text" name="cvv" id="cvv" required pattern="[0-9]{3}" maxlength="3">
                </div>

                <!-- Privacy & Policy Checkbox -->
                <div class="input-group checkbox-group">
                    <input type="checkbox" name="privacy" id="privacy" onclick="enableButton()">
                    <label for="privacy">I accept the Privacy & Policy</label>
                </div>

                <!-- Submit  -->
                <div class="input-group">
                    <input type="submit" id="Submit" name="Submit" class="Submit" value="Submit" disabled>
                </div>
            </form>
        </fieldset>
    </div>

    <!-- footer  -->
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

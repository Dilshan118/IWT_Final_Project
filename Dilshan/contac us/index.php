<?php
// Include the database connection
include('db_connection.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Parking Inquiry Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="stylesHeaderFooter.css">
  <script src="faq.js" defer></script> <!-- Linking to the external FAQ JavaScript file -->
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


  <div class="main-content">
    <div class="container" id="inquiry">
      <h1 class="form-title">Parking Inquiry</h1>

      <form method="POST" action="addInquiry.php">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="first-name" id="first-name" placeholder="First Name" required>
        </div>

        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="last-name" id="last-name" placeholder="Last Name" required>
        </div>

        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="email" placeholder="Email" required>
        </div>

        <div class="input-group">
          <i class="fas fa-phone"></i>
          <input type="tel" name="phone" id="phone" placeholder="Phone Number" required>
        </div>

        <div class="input-group">
          <i class="fas fa-car"></i>
          <input type="text" name="vehicle" id="vehicle" placeholder="Vehicle Details" required>
        </div>

        <div class="input-group">
          <i class="fas fa-calendar"></i>
          <input type="date" name="date" id="date" required>
        </div>

        <div class="input-group">
          <i class="fas fa-clock"></i>
          <input type="time" name="time" id="time" required>
        </div>

        <div class="input-group">
          <i class="fas fa-comments"></i>
          <textarea name="comments" id="comments" rows="4" placeholder="Type your inquiry here"></textarea>
        </div>

        <input type="submit" class="btn" id="submit" name="submit-inquiry" value="Submit Inquiry">

      </form>
    </div>

    <!-- Include the preview section -->
    <?php include('listInquiries.php'); ?>
    <button class = "btn" type = "button" id = "faq-btn" onclick = "loadFAQ()">FAQ</button>
  </div>

      <!-- Hidden FAQ section that will be shown using JavaScript -->
 <div id="faq-section">
    <h3>Frequently Asked Questions</h3>
    <div id="faq-content">
    <p><h4 id="faq-content-para">Click on the FAQ button to view the frequintly asked Questions</h4></P>
    </div>
 </div>



 
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

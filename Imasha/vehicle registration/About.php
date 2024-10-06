<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParkPal Swift</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> 
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
                         <li><a href="../../hansi/userprofile/logout.php" class="pps-nav-btn">Log Out</a></li>
                         <li><a href="../../hansi/userprofile/read.php" class="pps-nav-btn">Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <hr>
    <h1 id="head">About Us</h1>
    <hr>
    
    <fieldset class="leg1 about-section">
        <div class="text-section">
            <h3 id="para"><b>Our Vision</b></h3>
            <p id="para1">To revolutionize the parking experience by providing a user-friendly, efficient, and secure platform that simplifies parking management, enhances convenience, and promotes sustainable urban mobility.</p>
            <h3 id="para"><b>Our Mission</b></h3>
            <p id="para1">To simplify parking management and enhance urban mobility by providing a seamless, secure, and efficient platform that connects users to convenient parking solutions while promoting sustainable and smart city initiatives.</p>
        </div>
        <div class="image-section">
            <img src="images/park.jpeg" alt="About Us" id="about-image"> 
        </div>
    </fieldset>

    <div>
        <button class="btn1" type="button" id="btn1" onclick="loadData('admin')">Administrator</button>
        <button class="btn1" type="button" id="btn2" onclick="loadData('support')">Support Urgent</button>
        <button class="btn1" type="button" id="btn3" onclick="loadData('operator')">System Operator</button>
    </div>

    <section class="team">
        <h2>Team Information</h2>
        <div id="team-info" class="info-display">
        <img src="images/all.jpeg" alt="people" id="workers"> 
        </div> 
    </section>

    <script src="aboutjs/aboutus.js"></script>

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

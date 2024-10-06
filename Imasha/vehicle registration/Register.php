<!DOCTYPE HTML>
<html>
<head>
   
   <title> ParkPal Swift </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <link rel = "stylesheet" href = "styles.css">

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


   <center><h1> Vehicle Registration </h1></center>
   <form id = "vehicleForm" method ="POST" action = "create.php" >
   
   <fieldset>
   <fieldset>
   <legend><h3 id= "sub1">Register Information</h3> </legend>

    Vehicle ID :
    <input type="text" name="id" placeholder="Vehicle ID " required ><br><br>

    User ID :
    <input type="text" name="uid" required><br><br>

    Full Name:
	<input type="text" name="fullname" placeholder="Full Name" required ><br><br>
	
	Mobile Number:
	<input type="phone" pattern="[0-9]{10}" name="mobile" required ><br><br>
    
    Email:
    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" id="myEmail"	><br><br>
	
	License Plate No:
	<input type="text" name="plateNo" placeholder="Plate No" required ><br><br>
	
	Model:
	<input type="text" name="model" id="model" required ><br><br>
	
	Year:
	<input type="text" name="year" id="year" min="2000" max="2024" required><br><br>
	
	Color:
	<input type="text" name="color" id="color" required ><br><br>
	
	Vehicle Type:
	<select name="vehicleType" id="vehicleType" required><br><br>
    <option> Car </option>
    <option> Motor Bike </option>
    <option> Truck </option>
	<option> Three-Wheel </option>
	<option> Van </option>
	</select><br><br>
    
	</fieldset>
	</fieldset><br><br>
	<center><input type="submit" value=" Register" id="submitbtn"></center><br><br>
	<center><input type="reset" value=" Reset" id="resetbtn"></center>

	
</form>

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
	
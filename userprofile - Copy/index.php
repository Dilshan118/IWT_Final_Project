<!DOCTYPE html>
<html>
<head>

    
    <title>User Registration</title>
    <link rel="stylesheet" href="styles/regheader.css">
    <link rel="stylesheet" href="styles/regfooter.css">
    <link rel="stylesheet" href="styles/registration.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script >
        function checkPassword()
        {
            if (document.getElementById("pw").value != document.getElementById("repw").value)//check pw not match
            {
                alert("Password Mismatch!");
                return false;
            }

            else{
                alert("Success!");
                return true;
            }
        }

        function enableButton()
        {
            if(document.getElementById("privacy").checked)
            {
                document.getElementById("Submit").disabled = false;
            }

            else    
            {
                document.getElementById("Submit").disabled = true;
            }
        }
    </script>
</head>
<body>


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
                    <li><a href="#profile" class="pps-nav-btn">User Profile</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <?php
        require 'config.php';
    ?>
    <div class="main-content">
    <div class="registration-container">
        <h2 id="uph">User Registration</h2>
        <fieldset>
            <form action="insert.php" method="post" onsubmit="return checkPassword()" >
                <!--<div class="input-group">
                    <label for="uid">User ID :</label><br />
                    <input type="number" name="uid" class="uid" disabled><br /><br />
                </div>-->

                <div class="input-group">
                    <label for="uname">User Name :</label><br />
                    <input type="text" name="uname" class="uname"><br /><br />
                </div>

                <div class="input-group">
                    <label for="fname">Full Name :</label><br />
                    <input type="text" name="fname" class="fname"><br /><br />
                </div>

                <div class="input-group">
                    <label for="gender">Gender :</label><br />
                    <input type="radio" name="gender" class="gender" value="Male">Male
                    <input type="radio" name="gender" class="gender" value="Female">Female<br /><br />
                </div>

                <div class="input-group">
                    <label for="mobile">Mobile Number :</label><br />
                    <input type="tel" name="mobile" class="mobile" placeholder="123-1234567"
                        pattern="[0-9]{3}-[0-9]{7}"><br /><br />
                </div>

                <div class="input-group">
                    <label for="mail">E-mail :</label><br />
                    <input type="email" name="mail" class="mail" placeholder="abc@gmail.com"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br /><br />
                </div>

                <div class="input-group">
                    <label for="NIC">NIC :</label><br />
                    <input type="text" name="NIC" class="NIC"><br /><br />
                </div>

                <div class="input-group">
                    <label for="address">Address :</label><br />
                    <textarea name="address" class="address" rows="4" cols="50"></textarea><br /><br />
                </div>

                <div class="input-group">
                    <label for="dob">DOB :</label><br />
                    <input type="date" name="dob" class="dob"><br /><br />
                </div>

                <div class="input-group">
                    <label for="pw">Password</label><br />
                    <input type="password" id="pw" name="pw" class="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 5-10 characters"
                        required><br /><br />
                </div>

                <div class="input-group">
                    <label for="repw">Re-enter Password</label><br />
                    <input type="password" name="repw" id="repw" class="repw"><br /><br />
                </div>

                <div class="input-group">
                    <input type="checkbox" name="privacy" id="privacy" class="privacy" onclick="enableButton()">
                    <label for="privacy">Accept Privacy & Policy</label><br /><br />
                </div>

                <div class="input-group">
                    <input type="submit" id="Submit"  name="Submit" class="Submit" value="Submit">
                </div> 
            </form>
        </fieldset>
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
    </footer>
</body>
</html>
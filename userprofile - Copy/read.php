

<!DOCTYPE html>
<html>
<head>
    
    <title>User Registration</title>
    <link rel="stylesheet" href="styles/profile.css"> 
    <link rel="stylesheet" href="styles/regheader.css"> 
    <link rel="stylesheet" href="styles/regfooter.css">
</head>
<body>
    <?php
        require 'config.php';

        //check id set
        if (isset($_GET["uid"]))
        {
            $userid = $_GET["uid"];

            $sql = "select * from ureg
                    where UserID = $userid";
            $result = $con->query($sql);

            //details exists
            if($result->num_rows > 0)
            {
                $row = $result->fetch_assoc();
            }

            else{
                echo "No user found with ID: $userid";
                exit();
            }
        }

        else{
            echo "User ID not provided!";
            exit();
        }

        $con->close();
    ?>

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
    <div class="profile-container">
        <h2 id="uph">User Profile</h2>
        <fieldset>
            <table>
            <tr>
            <th>User ID:</th>
            <td><?php echo $row["UserID"];?></td>
            </tr>
            <tr>
            <th>User Name:</th>
            <td><?php echo $row["UserName"];?></td>
            </tr>
            <tr>
            <th>Full Name:</th>
            <td><?php echo $row["FullName"];?></td>
            </tr>
            <tr>
            <th>Gender:</th>
            <td><?php echo $row["Gender"];?></td>
            </tr>
            <tr>
            <th>Mobile Number:</th>
            <td><?php echo $row["MobileNumber"];?></td>
            </tr>
            <tr>
            <th>Email:</th>
            <td><?php echo $row["Email"];?></td>
            </tr>
            <tr>
            <th>NIC:</th>
            <td><?php echo $row["NIC"];?></td>
            </tr>
            <tr>
            <th>Address:</th>
            <td><?php echo $row["Address"];?></td>
            </tr>
            <tr>
            <th>DOB:</th>
            <td><?php echo $row["DOB"];?></td>
            </tr>            
            </table>

            <div class ="button-container">
                <button onclick="window.location.href='updateindex.php?uid=<?php echo $row['UserID'];?>'">Edit Profile</button>
                <button onclick="window.location.href='deleteindex.php?uid=<?php echo $row['UserID'];?>'">Delete Profile</button>
            </div>
        </fieldset>
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

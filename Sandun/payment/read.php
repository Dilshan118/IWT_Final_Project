<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <link rel="stylesheet" href="styles/display.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <?php
    require 'config.php';

    // Check if payment ID is set
    if (isset($_GET["pid"])) {
        $paymentid = $_GET["pid"];

        //   fetch payment details
        $sql = "SELECT * FROM payment WHERE PaymentID = '$paymentid'";
        $result = $con->query($sql);

        // if details exist
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<script>
                    alert('No payment found with ID: $paymentid');
                    window.location.href='updateindex.php';
                  </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('Payment ID not provided!');
                window.location.href='updateindex.php';
              </script>";
        exit();
    }

    $con->close();
    ?>

    <!--header-->
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
                         <li><a href="../../hansi/userprofile/logout.php" class="pps-nav-btn">LogOut</a></li>
                         <li><a href="../../hansi/userprofile/read.php" class="pps-nav-btn">Profile</a></li>
                        </ul>
                    </nav>
                </div>
        </header>

        <!--profile-->
    <div class="profile-container">
        <h2 id="uph">Payment Details</h2>
        <fieldset>
            <table>
                <tr>
                    <th>Payment ID:</th>
                    <td><?php echo htmlspecialchars($row["PaymentID"]); ?></td>
                </tr>
                <tr>
                    <th>User Name:</th>
                    <td><?php echo htmlspecialchars($row["UserName"]); ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo htmlspecialchars($row["Email"]); ?></td>
                </tr>
                <tr>
                    <th>Payment Amount:</th>
                    <td><?php echo htmlspecialchars($row["PaymentAmount"]); ?></td>
                </tr>
                <tr>
                    <th>Vehicle ID:</th>
                    <td><?php echo htmlspecialchars($row["VehicleID"]); ?></td>
                </tr>
                <tr>
                    <th>Billing Information:</th>
                    <td><?php echo htmlspecialchars($row["BillingInformation"]); ?></td>
                </tr>
                <tr>
                    <th>Card Number:</th>
                    <td><?php echo htmlspecialchars($row["CardNumber"]); ?></td>
                </tr>
                <tr>
                    <th>Expiration Date:</th>
                    <td><?php echo htmlspecialchars($row["ExpirationDate"]); ?></td>
                </tr>
                <tr>
                    <th>CVV:</th>
                    <td><?php echo htmlspecialchars($row["CVV"]); ?></td>
                </tr>
            </table>

            <div class="button-container">
                <button onclick="window.location.href='updateindex.php?pid=<?php echo $row['PaymentID']; ?>'">Edit Payment</button>
                <button onclick="window.location.href='deleteindex.php?pid=<?php echo $row['PaymentID']; ?>'">Delete Payment</button>
            </div>
        </fieldset>
    </div>

    <!--footer-->
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

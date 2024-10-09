<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Payment Form</title>
    <link rel="stylesheet" href="styles/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <script>
        function enableButton() {
            document.getElementById("Submit").disabled = !document.getElementById("privacy").checked;
        }
    </script>
</head>
<body>
</head>
<body>

    <?php
        require 'config.php';

        //  payment ID is set
        if (isset($_GET["pid"])) {
            $paymentid = $_GET["pid"];

            //  fetch payment details
            $sql = "SELECT * FROM payment WHERE PaymentID = $paymentid";
            $result = $con->query($sql);

            //  if details exist
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            } else {
                echo "No payment found with ID: $paymentid";
                exit();
            }
        } else {
            echo "Payment ID not provided!";
            exit();
        }

        // Update 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Retrieve 
            $username = $_POST['username'];
            $email = $_POST['email'];
            $pay = $_POST['pay'];
            $vehicleid = $_POST['vehicleid'];
            $billinginfo = $_POST['billinginfo'];
            $cardnumber = $_POST['cardnumber'];
            $expirationdate = $_POST['expirationdate'];
            $cvv = $_POST['cvv'];

            // for update
            $updateSql = "UPDATE payment SET 
                UserName = '$username',
                Email = '$email',
                PaymentAmount = '$pay',
                VehicleID = '$vehicleid',
                BillingInformation = '$billinginfo',
                CardNumber = '$cardnumber',
                ExpirationDate = '$expirationdate',
                CVV = '$cvv'
                WHERE PaymentID = $paymentid";

            if ($con->query($updateSql) === TRUE) {
                echo "<p>Payment details updated successfully.</p>";
            } else {
                echo "<p>Error updating payment details: " . $con->error . "</p>";
            }
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

        <!--form-->

    <div class="payment-container">
        <h2>Update Payment Details</h2>
        <fieldset>
            <form action="update.php" method="post">
                <div class="input-group">
                    <label for="pid">Payment ID:</label><br />
                    <input type="text" name="pid" readonly value="<?php echo $row['PaymentID']; ?>"><br /><br />
                </div>

                <div class="input-group">
                    <label for="username">User Name:</label><br />
                    <input type="text" name="username" required value="<?php echo $row['UserName']; ?>"><br /><br />
                </div>

                <div class="input-group">
                    <label for="email">Email:</label><br />
                    <input type="email" name="email" required value="<?php echo $row['Email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"><br /><br />
                </div>

                <div class="input-group">
                    <label for="pay">Payment Amount:</label><br />
                    <input type="text" name="pay" required value="<?php echo $row['PaymentAmount']; ?>"><br /><br />
                </div>

                <div class="input-group">
                    <label for="vehicleid">Vehicle ID:</label><br />
                    <input type="text" name="vehicleid" required value="<?php echo $row['VehicleID']; ?>"><br /><br />
                </div>

                <div class="input-group">
                    <label for="billinginfo">Payment Method:</label><br />
                    <select name="billinginfo" required>
                        <option value="Credit Card" <?php if($row['BillingInformation'] == 'Credit Card') echo 'selected'; ?>>Credit Card</option>
                        <option value="Debit Card" <?php if($row['BillingInformation'] == 'Debit Card') echo 'selected'; ?>>Debit Card</option>
                    </select><br /><br />
                </div>

                <div class="input-group">
                    <label for="cardnumber">Card Number:</label><br />
                    <input type="text" name="cardnumber" required value="<?php echo $row['CardNumber']; ?>" pattern="[0-9]{16}" maxlength="16"><br /><br />
                </div>

                <div class="input-group">
                    <label for="expirationdate">Expiration Date:</label><br />
                    <input type="month" name="expirationdate" required value="<?php echo date('Y-m', strtotime($row['ExpirationDate'])); ?>"><br /><br />
                </div>

                <div class="input-group">
                    <label for="cvv">CVV:</label><br />
                    <input type="text" name="cvv" required value="<?php echo $row['CVV']; ?>" pattern="[0-9]{3}" maxlength="3"><br /><br />
                </div>

                <div class="input-group">
                    <input type="checkbox" name="privacy" id="privacy" onclick="enableButton()">
                    <label for="privacy">Accept Privacy & Policy</label><br /><br />
                </div>

                <div class="input-group">
                    <input type="submit" id="Submit" name="Submit" class="Submit" value="Update" disabled>
                </div>
            </form>
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

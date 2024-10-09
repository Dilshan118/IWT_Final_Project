<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reservation.css">
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Automated Parking Reservation</title>
</head>
<body>

    <!-- Header Section -->
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

    <main>
        <h2>Welcome to Our Automated Parking Service</h2>
        <p>We offer a seamless parking reservation experience, allowing you to book your spot in advance. No more circling around looking for parking—reserve your space and enjoy peace of mind.</p>

        <h2>Select a Block</h2>
        <div class="block-selector">
            <button class="block-button" data-block="A">Block A</button>
            <button class="block-button" data-block="B">Block B</button>
            <button class="block-button" data-block="C">Block C</button>
        </div>

        <div class="parking-lot" id="parking-lot">
            <!-- Parking spots will be generated here -->
        </div>

        <h2>Reserve Your Spot</h2>
        <div class="reservation-form">
            <form action="reservecreate.php" method="post">
                <label for="spotid">SpotID</label>
                <input type="text" id="spotID" name="spotID" required readonly><br>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>

                <label for="duration">Duration (hours):</label>
                <select id="duration" name="duration" required>
                    <option value="1">1 Hour</option>
                    <option value="2">2 Hours</option>
                    <option value="3">3 Hours</option>
                    <option value="4">4 Hours</option>
                    <option value="5">5 Hours</option>
                </select>

                <button type="submit">Reserve Now</button>
            </form>
        </div>
    </main>

    <!-- Footer Section -->
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

    <script>
        const blocks = document.querySelectorAll('.block-button');
        const parkingLot = document.getElementById('parking-lot');

        // Create parking spots dynamically
        function createParkingSpots(block) {
            parkingLot.innerHTML = ''; // Clear existing spots
            for (let i = 1; i <= 50; i++) {
                const spot = document.createElement('div');
                spot.classList.add('parking-spot');
                spot.setAttribute('data-spot', `${block}-${i}`);
                spot.innerHTML = `<div class="spot-label">${block}-${i}</div>`;
                parkingLot.appendChild(spot);

                spot.addEventListener('click', () => {
                    const selectedSpots = parkingLot.querySelectorAll('.selected');
                    selectedSpots.forEach(s => s.classList.remove('selected')); // Deselect all
                    spot.classList.add('selected'); // Select the clicked spot
                    const selectedSpot = spot.getAttribute('data-spot');
                    document.getElementById('spotID').value = selectedSpot; // Set the selected spot ID
                    console.log(`Selected Spot: ${selectedSpot}`);
                });
            }
            parkingLot.style.display = 'grid'; // Show parking spots
        }

        blocks.forEach(block => {
            block.addEventListener('click', () => {
                const selectedBlock = block.getAttribute('data-block');
                createParkingSpots(selectedBlock);
            });
        });

        // Log spotID before form submission
        document.querySelector('form').addEventListener('submit', function(event) {
            console.log(`Spot ID being submitted: ${document.getElementById('spotID').value}`);
        });
    </script>
</body>
</html>

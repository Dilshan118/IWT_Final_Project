<?php
// Start session
session_start();

// Include database connection
$conn = mysqli_connect("localhost", "root", "", "isdm_final_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signin'])) {
    // Fetch user inputs
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to check if user exists in the database
    $query = "SELECT * FROM ureg WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($conn, $query);

    // Check if the user exists and the password is correct
    if (mysqli_num_rows($result) == 1) {
        // Fetch user data
        $user = mysqli_fetch_assoc($result);
        
        // Store user details in session
        $_SESSION['UserID'] = $user['UserID'];
        $_SESSION['UserName'] = $user['UserName'];
        $_SESSION['FullName'] = $user['FullName'];

        // Redirect to a dashboard or home page
        header("Location: ../../Hansi/home/home.html");
       //echo $_SESSION['UserID'];
    } else {
        // If login fails, show error
        echo "<script>alert('Invalid email or password. Please try again.');</script>";
    }
}

mysqli_close($conn);
?>

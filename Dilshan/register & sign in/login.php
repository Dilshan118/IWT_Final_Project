<?php
// Start session
session_start();

$conn = mysqli_connect("localhost", "root", "", "isdm_final_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM ureg WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        $_SESSION['UserID'] = $user['UserID'];
        $_SESSION['UserName'] = $user['UserName'];
        $_SESSION['FullName'] = $user['FullName'];

        header("Location: ../../Hansi/home/home.html");
    } 
    else{
        
        echo "<script>alert('Invalid email or password. Please try again.');</script>";
        echo "<script>window.location.href='login.html';</script>";
    }
    
}

mysqli_close($conn);
?>

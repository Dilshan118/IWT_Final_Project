<?php

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    
    $vehicleID = $con->real_escape_string($_POST['id']);
    
   
    $sql = "DELETE FROM vehicle WHERE VehicleID = '$vehicleID'";

   
    if ($con->query($sql) === TRUE) {
        
        echo "<script>
                alert('Vehicle record deleted successfully!');
                window.location.href = 'register.php';  // Redirect to the registration page
              </script>";
    } else {

        echo "Error deleting record: " . $con->error;
    }
} else {
    
    echo "<script>
            alert('Invalid vehicle ID!');
            window.location.href = 'register.php';  // Redirect to the registration page
          </script>";
}


$con->close();
?>

<?php
require 'config.php';

// Check 
if (isset($_POST["paymentid"])) {
    $paymentid = $_POST["paymentid"];

    $select_sql = "SELECT * FROM payment WHERE PaymentID = ?";
    $stmt = $con->prepare($select_sql);
    $stmt->bind_param("i", $paymentid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Record exists, now proceed to delete it
        $delete_sql = "DELETE FROM payment WHERE PaymentID = ?";
        $delete_stmt = $con->prepare($delete_sql);
        $delete_stmt->bind_param("i", $paymentid);

        if ($delete_stmt->execute()) {
            echo "<script>
                    alert('Payment record deleted successfully.');
                    window.location.href = 'index.php'; // Redirect to the input page
                  </script>";
        } else {
            echo "Error deleting record: " . $delete_stmt->error;
        }

        $delete_stmt->close();
    } else {
        // No record found 
        echo "<script>
                alert('Invalid Payment ID. Please enter a valid Payment ID.');
                window.location.href = 'deleteindex.php'; // Redirect to the input page
              </script>";
    }

    $stmt->close();
    $con->close();
} else {
    echo "<script>
            alert('Payment ID not provided!');
            window.location.href = 'deleteindex.php'; // Redirect to the input page
          </script>";
}
?>

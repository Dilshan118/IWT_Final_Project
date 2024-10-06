<?php
$vehicleID = $_GET['id'];
?>
<!DOCTYPE HTML>
<html>
<head>
   <title>Delete Vehicle Record</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <link rel="stylesheet" href="styles.css">
</head>
<body>
   <center><h1>Delete Vehicle Record</h1></center>
   <form method="POST" action="vehicledelete.php">
      <input type="hidden" name="id" value="<?php echo $vehicleID; ?>">
      <fieldset>
         <p>Are you sure you want to delete this vehicle?</p>
         <p>Vehicle ID: <strong><?php echo $vehicleID; ?></strong></p>
         <input type="submit" value="Yes, Delete">
         <a href="read.php?id=<?php echo $vehicleID; ?>"><button type="button">Cancel</button></a>
      </fieldset>
   </form>
</body>
</html>


	
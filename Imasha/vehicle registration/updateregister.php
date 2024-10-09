<?php
require 'config.php';

$vehicleID = $_GET['id'];

$sql = "SELECT * FROM vehicle WHERE VehicleID='$vehicleID'";
$result = $con->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE HTML>
<html>
<head>
   <title> ParkPal Swift </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <link rel = "stylesheet" href = "styles.css">
</head>
<body>
   

   <center><h1> Vehicle Update </h1></center>
   <form method ="POST" action = "vehicleupdate.php">
   <center>
   <img src = "images/parking1.jpeg"  alt = "parking vehicle" width = "400px" height = "200px" class = "Vehicle"></center>
   <fieldset>
   <fieldset>
   <legend ><h3 id= "sub1">Update Register Information</h3> </legend>

    Vehicle ID :
    <input type="text" name="id" placeholder="Vehicle ID " value="<?php echo $row['VehicleID'];?>" required ><br><br>

    User ID :
    <input type="text" name="uid" value="<?php echo $row['UserID'];?>" required><br><br>

    Full Name:
	<input type="text" name="fullname" placeholder="Full Name" value="<?php echo $row['FullName'];?>" required ><br><br>
	
	Mobile Number:
	<input type="phone" pattern="[0-9]{10}" name="mobile" value="<?php echo $row['MobileNumber'];?>" required ><br><br>
    
    Email:
    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" id="myEmail" value="<?php echo $row['Email'];?>" required><br><br>
	
	License Plate No:
	<input type="text" name="plateNo" placeholder="Plate No" value="<?php echo $row['LicensePlateNo'];?>" required ><br><br>
	
	Model:
	<input type="text" name="model" id="model" value="<?php echo $row['Model'];?>" required ><br><br>
	
	Year:
	<input type="text" name="year" id="year" min="2000" max="2024" value="<?php echo $row['Year'];?>" required><br><br>
	
	Color:
	<input type="text" name="color" id="color" value="<?php echo $row['Color'];?>" required ><br><br>
	
	Vehicle Type:
	<select name="vehicleType" id="vehicleType" value="<?php echo $row['VehicleType'];?>" required><br><br>
    <option> Car </option>
    <option> Motor Bike </option>
    <option> Truck </option>
	<option> Three-Wheel </option>
	<option> Van </option>
	</select><br><br>
    
	</fieldset>
	</fieldset><br><br>
	<center><input type="submit" value=" Update" id="updatebtn"></center><br><br>
	<center><input type="reset" value=" Reset" id="resetbtn"></center>

	
</form>
</body>
</html>
	
  


	
	
  


	
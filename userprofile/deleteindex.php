<!DOCTYPE html>
<html>
<head>
    
    <title>User Registration</title>
    <link rel="stylesheet" href="styles/registration.css">
    <script src='userjs/reg.js'></script>
</head>
<body>
<?php
        require 'config.php';
?>    <div class="registration-container">
        <h2 id="uph">User Registration</h2>
        <fieldset>
        <form action="delete.php" method="post">
                <div class="input-group">
                    <label for="identifier">User ID or User Name :</label><br />
                    <input type="text" name="identifier" class="identifier" required><br /><br />
                </div>

                <div class="input-group">
                    <input type="submit" id="Submit" name="Submit" class="Submit" value="Delete">
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>
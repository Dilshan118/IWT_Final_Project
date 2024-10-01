<!DOCTYPE html>
<html>
<head>
    
    <title>User Registration</title>
    <link rel="stylesheet" href="styles/registration.css">
    <script >
        function checkPassword()
        {
            if (document.getElementById("pw").value != document.getElementById("repw").value)//check pw not match
            {
                alert("Password Mismatch!");
                return false;
            }

            else{
                alert("Success!");
                return true;
            }
        }

        function enableButton()
        {
            if(document.getElementById("privacy").checked)
            {
                document.getElementById("Submit").disabled = false;
            }

            else    
            {
                document.getElementById("Submit").disabled = true;
            }
        }
    </script>
</head>
<body>
    <?php
        require 'config.php';
    ?>
    <div class="registration-container">
        <h2 id="uph">User Registration</h2>
        <fieldset>
            <form action="insert.php" method="post" onsubmit="return checkPassword()" >
                <!--<div class="input-group">
                    <label for="uid">User ID :</label><br />
                    <input type="number" name="uid" class="uid" disabled><br /><br />
                </div>-->

                <div class="input-group">
                    <label for="uname">User Name :</label><br />
                    <input type="text" name="uname" class="uname"><br /><br />
                </div>

                <div class="input-group">
                    <label for="fname">Full Name :</label><br />
                    <input type="text" name="fname" class="fname"><br /><br />
                </div>

                <div class="input-group">
                    <label for="gender">Gender :</label><br />
                    <input type="radio" name="gender" class="gender" value="Male">Male
                    <input type="radio" name="gender" class="gender" value="Female">Female<br /><br />
                </div>

                <div class="input-group">
                    <label for="mobile">Mobile Number :</label><br />
                    <input type="tel" name="mobile" class="mobile" placeholder="123-1234567"
                        pattern="[0-9]{3}-[0-9]{7}"><br /><br />
                </div>

                <div class="input-group">
                    <label for="mail">E-mail :</label><br />
                    <input type="email" name="mail" class="mail" placeholder="abc@gmail.com"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br /><br />
                </div>

                <div class="input-group">
                    <label for="NIC">NIC :</label><br />
                    <input type="text" name="NIC" class="NIC"><br /><br />
                </div>

                <div class="input-group">
                    <label for="address">Address :</label><br />
                    <textarea name="address" class="address" rows="4" cols="50"></textarea><br /><br />
                </div>

                <div class="input-group">
                    <label for="dob">DOB :</label><br />
                    <input type="date" name="dob" class="dob"><br /><br />
                </div>

                <div class="input-group">
                    <label for="pw">Password</label><br />
                    <input type="password" id="pw" name="pw" class="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 5-10 characters"
                        required><br /><br />
                </div>

                <div class="input-group">
                    <label for="repw">Re-enter Password</label><br />
                    <input type="password" name="repw" id="repw" class="repw"><br /><br />
                </div>

                <div class="input-group">
                    <input type="checkbox" name="privacy" id="privacy" class="privacy" onclick="enableButton()">
                    <label for="privacy">Accept Privacy & Policy</label><br /><br />
                </div>

                <div class="input-group">
                    <input type="submit" id="Submit"  name="Submit" class="Submit" value="Submit">
                </div> 
            </form>
        </fieldset>
    </div>
</body>
</html>
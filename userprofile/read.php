

<!DOCTYPE html>
<html>
<head>
    
    <title>User Registration</title>
    <link rel="stylesheet" href="styles/profile.css">
    <script src="userjs.reg.js"></script>
</head>
<body>
    <?php
        require 'config.php';

        //check id set
        if (isset($_GET["uid"]))
        {
            $userid = $_GET["uid"];

            $sql = "select * from ureg
                    where UserID = $userid";
            $result = $con->query($sql);

            //details exists
            if($result->num_rows > 0)
            {
                $row = $result->fetch_assoc();
            }

            else{
                echo "No user found with ID: $userid";
                exit();
            }
        }

        else{
            echo "User ID not provided!";
            exit();
        }

        $con->close();
    ?>
    <div class="profile-container">
        <h2 id="uph">User Profile</h2>
        <fieldset>
            <table>
            <tr>
            <th>User ID:</th>
            <td><?php echo $row["UserID"];?></td>
            </tr>
            <tr>
            <th>User Name:</th>
            <td><?php echo $row["UserName"];?></td>
            </tr>
            <tr>
            <th>Full Name:</th>
            <td><?php echo $row["FullName"];?></td>
            </tr>
            <tr>
            <th>Gender:</th>
            <td><?php echo $row["Gender"];?></td>
            </tr>
            <tr>
            <th>Mobile Number:</th>
            <td><?php echo $row["MobileNumber"];?></td>
            </tr>
            <tr>
            <th>Email:</th>
            <td><?php echo $row["Email"];?></td>
            </tr>
            <tr>
            <th>NIC:</th>
            <td><?php echo $row["NIC"];?></td>
            </tr>
            <tr>
            <th>Address:</th>
            <td><?php echo $row["Address"];?></td>
            </tr>
            <tr>
            <th>DOB:</th>
            <td><?php echo $row["DOB"];?></td>
            </tr>            
            </table>

            <div class ="button-container">
                <button onclick="window.location.href='updateindex.php?uid=<?php echo $row['UserID'];?>'">Edit Profile</button>
                <button onclick="window.location.href='deleteindex.php?uid=<?php echo $row['UserID'];?>'">Delete Profile</button>
            </div>
        </fieldset>
    </div>
</body>
</html>

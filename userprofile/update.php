<?php
    require 'config.php';

    $userid = $_POST["uid"];
    $useruname = $_POST["uname"];
    $userfname = $_POST["fname"];
    $usergender = $_POST["gender"];
    $usermobile = $_POST["mobile"];
    $usermail = $_POST["mail"];
    $userNIC = $_POST["NIC"];
    $useraddress = $_POST["address"];
    $userdob = $_POST["dob"];
    $userpw = $_POST["pw"];

    if (empty($userid) || empty($useruname) || empty($userfname) || empty($usergender) || empty($usermobile) || empty($usermail) || empty($userNIC) || empty($useraddress) || empty($userdob) || empty($userpw)  )
    {
        echo "All Fields are REQUIRED.";
    }

    else{
        $sql = "UPDATE ureg
         SET UserName = '$useruname', FullName = '$userfname', Gender = '$usergender', MobileNumber = '$usermobile', 
            Email = '$usermail', NIC = '$userNIC', Address = '$useraddress', DOB = '$userdob', Password = '$userpw' 
            WHERE UserID = '$userid'";
    
        if($con -> query($sql)){
            echo"<script>
            alert ('Profile Updated Successfully');
            window.location.href='read.php?uid=$userid';
            </script>";
        }

        else{
            echo "Error updating profile:" .$con->error;
        }

        con->colde();

}
        
?>
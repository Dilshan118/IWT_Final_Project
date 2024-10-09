<?php

//data retrieve
    require 'config.php';
    $useruname = $_POST["uname"];
    $userfname = $_POST["fname"];
    $usergender = $_POST["gender"];
    $usermobile = $_POST["mobile"];
    $usermail = $_POST["mail"];
    $userNIC = $_POST["NIC"];
    $useraddress = $_POST["address"];
    $userdob = $_POST["dob"];
    $userpw = $_POST["pw"];

//insert to database

$sql = "INSERT INTO ureg (UserName, FullName, Gender, MobileNumber, Email, NIC, Address, DOB, Password) 
            VALUES ('$useruname', '$userfname', '$usergender', '$usermobile', '$usermail', '$userNIC', '$useraddress', '$userdob', '$userpw')";

if($con -> query($sql))
{

    header("Location:../../Dilshan/register & sign in/login.html");//redirect
    exit();
}

else
{
    echo "Error: ".$con ->error;
}


?>


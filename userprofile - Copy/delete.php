<?php
    require 'config.php';

    //check form submitted & identifier provided
    if(isset($_POST["identifier"]))
    {
       $identifier =  $_POST["identifier"];

       $sql = ""; 


       if(is_numeric($identifier))//check id or username & delete
       {
            $sql = "DELETE FROM ureg 
                    WHERE UserID = '$identifier'";
       }

       else{
        $sql = "DELETE FROM ureg 
                    WHERE UserName = '$identifier'";
       }

    }

    //check the query successfull or not
    if($con->query($sql)==TRUE)
    {
        if($con->affected_rows>0)
        {
            echo "<script>alert('Deleted Successfully!');</script>";
        }

        else{
            echo "<script>alert('Invalid User Name or User ID!');
            window.location.href='deleteindex.php'</script>";
        }
    }
    else{
        echo "<script>alert('No identifier provided. Please enter a User ID or User Name.'); window.location.href='deleteindex.php';</script>";
    }
    $con->close();

?>
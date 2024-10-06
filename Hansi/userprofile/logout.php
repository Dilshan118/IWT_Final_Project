<?php
       session_start();

       if(isset($_SESSION["UserID"])) {
              session_destroy();
              header("Location:../../Sandun/homepage/homepage.html");
       }
       else {
              echo"Error";
}
?>
<?php
 
 $conn= mysqli_connect("localhost", "root", "","lms");
 if(!$conn){
     echo "Connection Error".mysqli_connect_error();
 }
 
?>
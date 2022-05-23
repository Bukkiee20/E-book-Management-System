<?php
   include "config/conn.php";

   if(isset($_POST["upload"])){
      $image= $_FILES["image"]["name"];
      $tmp_name= $_FILES["image"]["tmp_name"];
      $destination= "images/".$image;
      move_uploaded_file($tmp_name, $destination);
      $bookname= $_POST["bk_name"];
      $auth_name= $_POST["auth_name"];
      $prod_year= $_POST["prod_year"];

       $sql= "INSERT INTO books(image_name, book_name, author, prod_year) VALUES ('$image','$bookname', '$auth_name', '$prod_year');";

        if(mysqli_query($conn,$sql)){
            header("Location: admin-dashboard.php");
        }
        else{
          echo "Query Error: ".mysqli_error($conn);
        }
   }
      
    
   
?>
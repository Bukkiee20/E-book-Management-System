<?php
   include "config/conn.php";

   $id= $_GET["updateid"];
   $sql="SELECT * FROM books where id= $id";
   $result= mysqli_query($conn, $sql);
   $row= mysqli_fetch_assoc($result);
   $image= $row["image_name"];
   $bookname= $row["book_name"];
   $auth_name= $row["author"];
   $prod_year= $row["prod_year"];

   if(isset($_POST["update"])){
      
      $image= $_FILES["image"]["name"];
      $tmp_name= $_FILES["image"]["tmp_name"];
      $destination= "images/".$image;
      move_uploaded_file($tmp_name, $destination);
      $bookname= $_POST["bk_name"];
      $auth_name= $_POST["auth_name"];
      $prod_year= $_POST["prod_year"];

       $sql= "UPDATE books set id= $id, image_name='$image', book_name='$bookname', author='$auth_name', prod_year='$prod_year' where id=$id";

        if(mysqli_query($conn,$sql)){
            echo "success";
        }
        else{
          echo "Query Error: ".mysqli_error($conn);
        }
   }
?>
<?php
   include "config/conn.php";

   if (isset($_GET["id"])){
       $id= mysqli_real_escape_string($conn,$_GET["id"]);
       

       $sql= "SELECT FROM books where id= $id";
        $result= mysqli_query($conn,$sql);

        if($result){
            while($row= mysqli_fetch_array($result)){
              $imageData= $row["image"];
            }
            header("content-type: image/jpeg");
        }

        else{
            echo "Query Error: ".mysqli_error($conn);
        }


   }
?>
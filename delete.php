<?php
   include "config/conn.php";

   if (isset($_GET["deleteid"])){
       $id= $_GET["deleteid"];
       

       $sql= "DELETE FROM books where id= $id";
        $result= mysqli_query($conn,$sql);

        if($result){
            header("Location:admin-dashboard.php");
        }

        else{
            echo "Query Error: ".mysqli_error($conn);
        }


   }
?>
<?php

   include "config/conn.php";
  
   $errors=["email"=> "", "password"=> "", "pass"=> ""];
   
   if(isset($_POST["login"])){
       if(empty($_POST["email"])){
          $errors["email"]= "Email is required";
       }
       else{
           $email= $_POST["email"];
           if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors["email"]= "A valid email address is required";
           }
       }

       if(empty($_POST["password"])){
          $errors["password"]= "Password is required";
       }
       else{
           $password= $_POST["password"];
           if(!preg_match('/^[a-zA-Z1-9]+$/', $password)){
            $errors["password"]= "Password must be uppercase, lowercase or numbers";
           }
       }

       if(array_filter($errors)){
         
       }
      else{
          $email= mysqli_real_escape_string($conn,$_POST["email"]);
          
 
          $sql= "SELECT * FROM signup WHERE email= '$email'";
          $result= mysqli_query($conn, $sql);
 
          if(mysqli_num_rows($result) < 1){
             $errors["pass"]= "This user does not exist";
           }
 
          else{
            $row= mysqli_fetch_assoc($result);
            if($row["pwd"] === $_POST["password"]){
               header("Location:./admin-dashboard.php");
            }
            else{
                $errors["pass"]= "Incorrect Password";
            }
    
           }
        }
   }

?>
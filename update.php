<?php
   include "include/update_inc.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update Page</title>
  </head>
  <body class="text-black bg-gray-400">
      <form method="POST" enctype= "multipart/form-data">
         <label>Image</label>
         <input type="file" name="image" class="mt-6" value = "<?php echo $image;?>"><br>

         <label>Book Name</label>
         <input type="text" name="bk_name" id="bk_name" placeholder="Book Title..." class="mt-4 outline-none" value="<?php echo $bookname?>"><br>

         <label>Author</label>
         <input type="text" name="auth_name" id="auth_name" placeholder="Author Name..." class="mt-4 outline-none" value = "<?php echo $auth_name;?>"><br>

         <label>Production Year</label>
         <input type="text" name="prod_year" id="prod_year" placeholder="Production Year..." class="mt-4 outline-none" value = "<?php echo $prod_year;?>"><br>

         <button type="submit" name="update" class="bg-red-600 rounded px-4 py-2 mt-4">Update</button>
      </form>
  </body>  
   
</html>
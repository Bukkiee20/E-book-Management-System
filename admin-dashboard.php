<?php
   include "delete.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div>

        <div class="bg-blue-500 p-4 flex justify-between">
            <div>
                <h1 class="text-2xl font-bold">ADMIN</h1>
            </div>
            <div>
                <a href="#" class="ml-4">Home</a>
                <a href="#" class="ml-4">Books</a>
                <a href="#" class="ml-4">Contact</a>
                <a href="#" class="ml-4">About</a>
                
            </div> 
       </div> 
        <div>
          <div class="mt-16 ml-24">
            <button type="submit" class="bg-black text-white px-4 py-2"><a href="upload.php">Add</a> </button>
          </div>
        
         
          <div class="mx-24 mt-4">
            <table class="table-auto border border-black min-w-full text-center">
              <thead class="border border-black text-center">
                <tr>
                  <th scope="col" class="px-2 py-2 border-black border-r">S/N</th>
                  <th scope="col" class="px-2 py-2 border-black border-r">PICTURE</th>
                  <th scope="col" class="px-2 py-2 border-black border-r">BOOK_NAME</th>
                  <th scope="col" class="px-2 py-2 border-black border-r">AUTHOR</th>
                  <th scope="col" class="px-2 py-2 border-black border-r">PROD_YEAR</th>
                  <th scope="col" class="px-2 py-2">OPERATIONS</th>
                </tr>
              </thead>
                <tbody>
                    <?php
                      include "config/conn.php";
                      $sql= "SELECT * FROM books";
                      $result= mysqli_query($conn, $sql);

                      if ($result){
                          while($row= mysqli_fetch_array($result)){ ?>
                            <tr class="border border-black">
                              <th scope="row" class="py-2 border-black border-r"><?php echo $row["id"] ?></th>
                              <td class="whitespace-nowrap border-black border-r"><img src="images/<?php echo $row["image_name"]?>" class="object-fill w-16 mx-auto" alt="book"></td>
                              <td class="px-2 py-3 whitespace-nowrap border-black border-r"><?php echo $row["book_name"]?></td>
                              <td class="px-2 py-3 whitespace-nowrap border-black border-r"><?php echo $row["author"]?></td>
                              <td class="px-2 py-3 whitespace-nowrap border-black border-r"><?php echo $row["prod_year"]?></td>
                              <td>
                                  <button name="" class="bg-blue-600 hover:bg-blue-800 px-2 py-1 text-white"><a href="update.php?updateid=<?php echo $row["id"]?>">Update</button>
                                  <button name= "delete" class="bg-red-600 hover:bg-red-800 px-2 py-1 text-white"><a href="delete.php?deleteid=<?php echo $row["id"]?>">Delete</button>
                              </td>
                            </tr>
                          <?php }
                        }
                        else{
                        echo "Query Error: ".mysqli_error($conn);
                        }
                      ?>
                 
                </tbody>
           </table>
          </div>
       </div>
    </div>
    
</body>
</html>
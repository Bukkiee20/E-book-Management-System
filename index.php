<?php
    include "config/conn.php";
    include "image.php";

    $sql= "SELECT book_name, author, prod_year FROM books ORDER BY id";
    $results= mysqli_query($conn, $sql);

    $books= mysqli_fetch_all($results, MYSQLI_ASSOC);
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-white bg-white">
    <div>
        <div class="bg-blue-500 p-4 flex justify-between">
            <div>
                <h1 class="text-2xl font-bold">LMS</h1>
            </div>
            <div>
                <a href="#" class="ml-4">Home</a>
                <a href="#" class="ml-4">Books</a>
                <a href="#" class="ml-4">Contact</a>
                <a href="#" class="ml-4">About</a>
                
            </div>  
        </div>
        
        <div>
            <h4>Available books</h4>
            <div class="flex justify-center items-center">
                
             <div class="mt-8  grid md:grid-cols-4 gap-10 ">

             <?php include "config/conn.php";
             $sql= "SELECT * FROM books";
             $results= mysqli_query($conn,$sql);

             if(mysqli_num_rows($results)){
                while($row= mysqli_fetch_array($results)){ ?>
                  <div class="bg-gray-200 overflow-hidden shadow-2xl rounded">
                    <img src="images/<?php echo $row["image_name"]?>" alt="book-cover" class="w-full h-60 w-30">
                   
                      <div class="px-6 pb-2 pt-4">
                          <h2 class="font-bold text-blue-500 text-xl"><?php echo $row["book_name"] ?></h2>
                          <p class="block text-sm text-gray-600">By <?php echo $row["author"] ?></p>
                          <p class="block text-sm text-gray-600"><?php echo $row["prod_year"] ?></p>
                      </div>
                    </div>
                <?php
                }
             }
             else{
                 echo "Books not found";
             }

             ?>
             </div>
                </div>
            </div>
        </div>

        

 

    </div>
</body>
</html>
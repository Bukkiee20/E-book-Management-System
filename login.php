<?php
    include "include/add.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-600 bg-gray-300 flex h-screen">
    <div class="w-full max-w-xs m-auto text-black bg-white rounded-lg p-5">
        <h1 class="font-bold text-2xl">Login to your Account</h1>
        <div class="text-red-500 text-sm mb-2 text-center mt-4"><?php echo $errors["pass"];?></div>
        <form method="POST" action="login.php">
            <label class="block font-semibold mb-1 mt-8">Email</label>
            <input type="email" name="email" class="border-b border-black hover:border-gray-500 outline-none mb-6 px-3 py-5 w-full h-5 ">
            <div class="text-red-500 text-sm mb-2"><?php echo $errors["email"];?></div>

            <label class="block font-semibold mb-1">Password</label>
            <input type="password" name="password" class="border-b border-black hover:border-gray-500 outline-none mb-6 w-full h-5 px-3 py-5">
            <div class="text-red-500 text-sm mb-2"><?php echo $errors["password"];?></div>

            <div>
                <button class="rounded cursor-pointer w-full bg-blue-800 text-white px-4 py-2 mb-6 hover:bg-blue-700" name="login">Login</button>
            </div>

        </form>
    </div> 
</body>
</html>
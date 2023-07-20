<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['date'])) {
        $_SESSION['date'] = $_POST['date'];

        // Redirect to Result page
        header('Location: formtest2.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <style>
    body {
        background-color: rgb(147 197 253);
    }
    </style>
</head>
<body>
<div class="flex items-center justify-center h-screen">
<form method="POST" action="formtest2.php" class="bg-white shadow-md rounded-md p-10">

<div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="date">วันที่มาใช้บริการ:</label>
                <!-- <input type="date" name="date" id="date" required -->
                <input type="datetime-local" name="date" class="border border-gray-400 rounded-md px-3 py-2 w-full"/>
                    
            </div>
            
                <br>
            <div class="flex justify-between mx-4 mt-4">
                <a href="formtestin.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">back</a>
                <button type="submit"
                    class=" 
                text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">next</button>
            </div>
            </div>
        </form>
</body>
</html>
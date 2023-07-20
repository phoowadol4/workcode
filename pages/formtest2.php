<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['ever'])) {
        $_SESSION['ever'] = $_POST['ever'];

        // Redirect to Result page
        header('Location: posttest2.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <style>
    body {
        background-color: rgb(147 197 253);
    }
    </style>
</head>
<body>
<div class="flex items-center justify-center h-screen">
    <form action="formtest2.php" method="post" class="bg-white shadow-md rounded-md p-10">
       <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">ผู้ป่วยมาใช้บริการที่นี่เป็นครั้งแรก:</label>
                <div>
                    <input type="radio" name="ever" id="ใช่" value="ใช่" required
                        class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="ใช่">ใช่</label>
                </div>
                <div>
                    <input type="radio" name="ever" id="ไม่" value="ไม่"
                        class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="ไม่">ไม่</label>
                </div>
        <br>
        <div class="flex justify-between mx-4 mt-4">
        <a href="formtest.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">back</a>
        <input type="submit" value="Submit">
        </div>
    </form>
    </div>
</body>
</html>

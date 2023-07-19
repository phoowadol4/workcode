<!DOCTYPE html>
<html>

<head>
    <title>Submit Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <style>
    body {
        background-color: #4682B4;
    }
    </style>
</head>

<body>
    <div class="container mx-auto p-8">
        <form method="POST" action="process.php" class="bg-white shadow-md rounded-md p-8">

            <h1 class="text-4xl font-bold mb-4">Submit Success</h1>
            <p class="text-green-500">Data submitted successfully!</p>

            <div class="flex justify-between mx-4 mt-4">
                <a href="orther.php"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">back</a>
                <a href="form.php"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">home</a>
                

            </div>
    </div>
</body>

</html>
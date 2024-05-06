<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center w-full ">
        <div class="bg-gray-50 shadow-md rounded-lg px-8 py-6 max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-500">Get Password</h1>
            <form action="./Controller/forget_pass_controller.php" method="post">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Enter The Email Address :</label>
                    <input type="email" name="email" id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="your@email.com" required>
                </div>
                
                <button  type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
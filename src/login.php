<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login component</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html,body{
            width:100%;
            height:100%;
        }
    </style>
    
</head>
<body>

<div class="min-h-screen flex items-center justify-center w-full ">
	<div class="bg-gray-50 shadow-md rounded-lg px-8 py-6 max-w-md">
		<h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-500">Welcome Back!</h1>
		<form action="Controller/lognIn_controller.php" method="post">
			<div class="mb-4">
				<label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
				<input type="email" name="email" id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="your@email.com" required>
			</div>
			<div class="mb-4">
				<label for="password" class="block text-sm font-medium text-gray-700  mb-2">Password</label>
				<input type="password" name="pass" id="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your password" required>
			</div>
            <div class="px-20 mb-4">
            <a href="./forget_password.php"
					class="text-sm text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Forget
					Password</a>
            </div>
			<button  type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
		</form>
	</div>
</div>

</body>
</html>
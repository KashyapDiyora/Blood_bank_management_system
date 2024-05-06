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
		<h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-500">Fill The Below Details!</h1>
		<form action="Controller/hospitalInfo_controller.php" method="post">
			<div class="mb-4">
				<label for="hospital_name" class="block text-sm font-medium text-gray-700 mb-2">Hospital Name</label>
				<input type="text" name="hName" id="hospital_name" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex:Kiran Hospital" required>
			</div>
			<div class="mb-4">
				<label for="hAdd" class="block text-sm font-medium text-gray-700  mb-2">Hospital Address</label>
				<textarea name="hAddress" id="hAdd" cols="10" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter Hospita Address" required></textarea>
			</div>
			<div class="mb-4">
				<label for="state" class="block text-sm font-medium text-gray-700  mb-2">Enter The State Name</label>
				<input type="text" name="hState" id="state" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Like Gujarat">
			</div>
            <div class="mb-4">
				<label for="city" class="block text-sm font-medium text-gray-700  mb-2">Enter The City Name</label>
				<input type="text" name="hCity" id="city" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Like Surat">
			</div>
			<button  type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
		</form>
	</div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>
</html>
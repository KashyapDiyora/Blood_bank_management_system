<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Blood Bottles</title>
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
    <div class="w-full h-full bg-white">
        <div class="flex px-10 bg-gray-50 w-full mx-auto">
            <div class="px-6 py-2 flex justify-between items-center w-full">
                <div class="flex justify-center align-center items-center">
                    <img src="https://www.freepnglogos.com/uploads/blood-drop-png/clipart-blood-drop-10.png" alt=""
                        class="w-20">
                    <div class="py-2 font-bold text-3xl text-blue-600" style="font-family: 'Poppins', sans-serif;">Blood
                        Bank</div>
                </div>
                <div class="hidden sm:block">
                    <div class="flex">
                    <a href="../src/index.php"
                        class="hover:text-blue-500 hover:cursor-pointer hover:border-b-2 hover:scale-110 hover:border-b-black mr-7 "><i
                            class="fa-solid fa-house"></i>Home</a>
                    <a href="#about"
                        class=" hover:text-blue-500 hover:cursor-pointer hover:border-b-2 hover:scale-110 hover:border-b-black mr-7"><i
                            class="fa-solid fa-circle-info"></i>About</a>
                    <a href="#service"
                        class="hover:text-blue-500 hover:cursor-pointer hover:border-b-2 hover:scale-110 hover:border-b-black mr-7"><i
                            class="fa-solid fa-droplet"></i>Service</a>
                    <a href="./dashbordData.php"
                        class="hover:text-blue-500 hover:cursor-pointer hover:border-b-2 hover:scale-110 hover:border-b-black mr-7"><i
                            class="fa-solid fa-calendar-days"></i>Dashbord</a>
                    <a href="./hospital_list_show.php"
                        class="hover:text-blue-500 hover:cursor-pointer hover:border-b-2 hover:scale-110 hover:border-b-black mr-7"><i
                            class="fa-solid fa-hospital"></i>Hospital</a>
                    </div>
                </div>
                <div class="flex gap-2 ">
                    <?php
                        if(isset($_SESSION['logn_in']) && $_SESSION['logn_in'] == true)
                        {
                            echo "<button class='bg-blue-600 rounded-lg text-white z-10 text- shadow-md shadow-red-300 p-2.5 text-xl relative before:bg-red-600 before:absolute before:-z-10 before:top-0 before:left-0 before:right-0 before:bottom-0 before:origin-left before:rounded-lg before:transition-all before:duration-700 before:scale-x-0 before:hover:scale-x-100'><a href='./Controller/logOut_controller.php' id='btn'>Log out</a></button>";
                        }
                        else
                        {
                            echo "<button class='bg-blue-600 rounded-lg text-white z-10 text- shadow-md shadow-red-300 p-2.5 text-xl relative before:bg-red-600 before:absolute before:-z-10 before:top-0 before:left-0 before:right-0 before:bottom-0 before:origin-left before:rounded-lg before:transition-all before:duration-700 before:scale-x-0 before:hover:scale-x-100'><a href='./signIn.php'>Sign Up</a></button>
                            <button class='bg-blue-600 rounded-lg text-white z-10 text- shadow-md shadow-red-300 p-2.5 text-xl relative before:bg-red-600 before:absolute before:-z-10 before:top-0 before:left-0 before:right-0 before:bottom-0 before:origin-left before:rounded-lg before:transition-all before:duration-700 before:scale-x-0 before:hover:scale-x-100'><a href='./login.php'>Logn in</a></button>";
                        }
                    ?>
                    
                </div>
            </div>

        </div>

    
        <div class="min-h-screen flex items-center justify-center w-full my-14 ">
            <div class="bg-gray-50 shadow-md rounded-lg px-8 py-6 max-w-md">
                <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-500">Set The Below Details</h1>
                <form action="Controller/set_blood_info_controller.php" method="post">
                    <div class="mb-4">
                        <label for="ap" class="block text-sm font-medium text-gray-700 mb-2">Enter The A+ Bottles No :</label>
                        <input type="number" name="ap" id="ap" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: 10" required>
                    </div>
                    <div class="mb-4">
                        <label for="an" class="block text-sm font-medium text-gray-700 mb-2">Enter The A- Bottles No :</label>
                        <input type="number" name="an" id="an" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: 10" required>
                    </div>
                    <div class="mb-4">
                        <label for="bp" class="block text-sm font-medium text-gray-700 mb-2">Enter The B+ Bottles No :</label>
                        <input type="number" name="bp" id="bp" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: 10" required>
                    </div>
                    <div class="mb-4">
                        <label for="bn" class="block text-sm font-medium text-gray-700 mb-2">Enter The B- Bottles No :</label>
                        <input type="number" name="bn" id="bn" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: 10" required>
                    </div>
                    <div class="mb-4">
                        <label for="abp" class="block text-sm font-medium text-gray-700 mb-2">Enter The AB+ Bottles No :</label>
                        <input type="number" name="abp" id="abp" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: 10" required>
                    </div>
                    <div class="mb-4">
                        <label for="abn" class="block text-sm font-medium text-gray-700 mb-2">Enter The AB- Bottles No :</label>
                        <input type="number" name="abn" id="abn" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: 10" required>
                    </div>
                    <div class="mb-4">
                        <label for="op" class="block text-sm font-medium text-gray-700 mb-2">Enter The O+ Bottles No :</label>
                        <input type="number" name="op" id="op" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: 10" required>
                    </div>
                    <div class="mb-4">
                        <label for="onn" class="block text-sm font-medium text-gray-700 mb-2">Enter The O- Bottles No :</label>
                        <input type="number" name="onn" id="onn" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: 10" required>
                    </div>
                    
                    <button  type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                </form>
            </div>
        </div>


        <div class="w-full h-[200px]">
           
           <div class="w-full h-full mx-auto">

               <footer
                   class="h-full p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-zinc-100">
                   <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                           href="https://flowbite.com" class="hover:underline" target="_blank">Mango</a>. All
                       Rights Reserved.
                   </span>
                   <ul class="flex flex-wrap items-center mt-3 sm:mt-0">
                       <li>
                           <a href="#"
                               class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">About</a>
                       </li>
                       <li>
                           <a href="#"
                               class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Privacy
                               Policy</a>
                       </li>
                       <li>
                           <a href="#"
                               class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Licensing</a>
                       </li>
                       <li>
                           <a href="#" class="text-sm text-gray-500 hover:underline dark:text-gray-400">Contact</a>
                       </li>
                   </ul>
               </footer>
           </div>
       </div>
        

    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>
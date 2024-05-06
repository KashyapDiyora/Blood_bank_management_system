<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book The Appoaintment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html,body{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

    <div class="w-full h-full bg-white">

        <!-- Nav  -->

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
                    <a href="../src/index.php#about"
                        class=" hover:text-blue-500 hover:cursor-pointer hover:border-b-2 hover:scale-110 hover:border-b-black mr-7"><i
                            class="fa-solid fa-circle-info"></i>About</a>
                    <a href="../src/index.php#service"
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

        <!-- Body -->

        <div class="w-full h-auto bg-white flex justify-center items-center">
            <div class="flex ">
                <div class="flex justify-center items-center">
                    <img src="https://tnnbda.com/wp-content/uploads/2023/06/IMG-20230605-WA0007.jpg" alt="" width="400px">
                </div>
                <div class="bg-white shadow-sm rounded-lg px-8 py-6 max-w-md">
                    <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-500">Welcome Donner!</h1>

                    <form action="Controller/bookSlot_controller.php" method="post">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700  mb-2">Enter Your Name</label>
                            <input type="text" name="name" id="name" class="shadow-sm rounded-md w-full px-4 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="ex. Nevil Koshiya" required>
                        </div>
                        <div class="mb-4">
                            <label for="age" class="block text-sm font-medium text-gray-700  mb-2">Enter Your Age</label>
                            <input type="number" name="age" id="age" class="shadow-sm rounded-md w-full px-4 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="ex. 30" required>
                        </div>
                        <div class="mb-4">
                            <label for="weight" class="block text-sm font-medium text-gray-700  mb-2">Enter Your Weight</label>
                            <input type="number" name="weight" id="weight" class="shadow-sm rounded-md w-full px-4 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="ex. 50 kg" required>
                        </div>
                        <div class="mb-4">
                            <label for="blood_group" class="block text-sm font-medium text-gray-700  mb-2">Select The Blood Group :</label>
                            <select name="blood_group" id="blood_group" class="w-full h-10 bg-white rounded-md border border-black">
                                <option value="ap">A+</option>
                                <option value="an">A-</option>
                                <option value="bp">B+</option>
                                <option value="bn">B-</option>
                                <option value="abp">AB+</option>
                                <option value="abn">AB-</option>
                                <option value="op">O+</option>
                                <option value="onn">O-</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Enter The Slot Date</label>
                            <input type="date" name="date" id="date" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"  required>
                        </div>
                        <div class="mb-4">
                            <label for="city" class="block text-sm font-medium text-gray-700 mb-2">Enter The City :</label>
                            <input type="text" name="city" id="city" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: Surat" required>
                        </div> 
                        <div class="mb-4">
                            <label for="state" class="block text-sm font-medium text-gray-700 mb-2">Enter The State :</label>
                            <input type="text" name="state" id="state" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex: Gujarat" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address :</label>
                            <input type="email" name="email" id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="your@email.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="no" class="block text-sm font-medium text-gray-700 mb-2">Mobile No :</label>
                            <input type="number" name="phone_no" id="no" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ex : 8790012390" required>
                        </div>
                        <button  type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                    </form>
	            </div>
            </div>
        </div>
        
        <!-- Footer -->

        <div class="w-full h-[200px] mt-20">
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
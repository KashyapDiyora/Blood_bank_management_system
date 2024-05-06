<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
        
        <div class="w-full px-10 my-5" style="height: 400px; width: 100%;">
            <div class="w-full h-full mx-4" id="image-div">
                <div
                    class="absolute h-full z-10 text-xl sm:w-[48%] sm:px-10 sm:py-16 hidden sm:block text-white font-semibold">
                    <h1 class="bg-blue-400 rounded-lg p-3 mb-2 sm:w-full"><i class="fa-solid fa-droplet"
                            style="color: #e21d31;"></i> An end to end Solution for managing Blood Transfusion Center or
                        Storage Unit.</h1>
                    <h1 class="bg-blue-400 rounded-lg p-3 mb-2"><i class="fa-solid fa-droplet"
                            style="color: #e21d31;"></i> User friendly and configurable.</h1>
                    <h1 class="bg-blue-400 rounded-lg p-3 mb-2"><i class="fa-solid fa-droplet"
                            style="color: #e21d31;"></i> Available as Software-as-a-Service.</h1>
                    <h1 class="bg-blue-400 rounded-lg p-3 mb-2"><i class="fa-solid fa-droplet"
                            style="color: #e21d31;"></i>Adhere to National Aids Control Organisation(NACO) Guidelines.
                    </h1>
                </div>
                <img src="https://ebloodbank.gov.in/eBloodbank/assets/img/map.png" alt=""
                    class="img rounded-3xl h-full w-full absolute">
                <img src="https://ebloodbank.gov.in/eBloodbank/assets/img/slide2.png" alt=""
                    class="img rounded-3xl h-full w-full absolute">
            </div>
        </div>

        <div class="pt-16" id="about">
            <div class="grid sm:grid-cols-12 m-4 gap-5 mx-14">
                <div class="sm:col-span-4 bg-[#004bade1] rounded-3xl p-7 px-11 col-span-12 shadow-2xl">
                    <h1 class="text-2xl text-white">Why e-BloodBank?</h1>
                    <div class="pt-5 text-lg text-white">
                        Workflow-based web-enabled service-centric comprehensive IT solution for managing processes and
                        services of an individual Blood Bank or Blood Bank attached to a Hospital.
                    </div>
                </div>
                <div class="sm:col-span-4 col-span-12 flex flex-col items-center bg-gray-50 shadow-2xl p-5 rounded-3xl">
                    <i class="fa-solid fa-file text-[50px] sm:mt-8 mt-3"></i>
                    <span class="text-2xl">Standards</span>
                    <div class="sm:mt-5 mt-3 text-center text-[17px]">
                        Adheres to NACO, Drug & Cosmetic Act & NABH Guidelines.
                    </div>
                </div>
                <div class="sm:col-span-4 col-span-12 flex flex-col items-center bg-gray-50 shadow-2xl p-5 rounded-3xl">
                    <i class="fa-solid fa-laptop text-[50px] sm:mt-8 mt-3"></i>
                    <span class="text-2xl">Dashboard</span>
                    <div class="sm:mt-5 mt-3 text-center text-[17px]">Providing difrent kind of Data to Perform analysis
                    </div>
                </div>
            </div>
        </div>


        <div class="px-3 md:lg:xl:px-40 w-full border-t border-b py-16 bg-opacity-10" id="service">
            <div class="w-full text-center m-3">
                <div class="text-3xl text-slate-600 cursor-pointer inline-block hover:border-b-black hover:border-b-2">
                    Service
                </div>
            </div>

            <a href="./redirect_controller.php">
                <div
                    class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                    <span class="p-5 rounded-full overflow-hidden text-white shadow-lg shadow-red-200">
                        <img src="https://ebloodbank.gov.in/eBloodbank/assets/img/logo/1.png" alt="" class="w-12">
                    </span>
                    <p class="text-xl font-medium text-slate-700 mt-3">Book Slot for Donation</p>
                    <p class="mt-2 text-sm text-slate-500">User can Book the slot for Blood Docation</p>
                    <p class="text-sm text-slate-500">Your Bload is Valuable for Others</p>
                </div>
            </a>

            <a href="./get_blood_info.php">
                <div
                class="w-full p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                    <span class="p-5 rounded-full text-white shadow-lg shadow-orange-200">
                        <img src="https://ebloodbank.gov.in/eBloodbank/assets/img/logo/5.png" alt="" class="w-12">
                    </span>
                    <p class="text-xl font-medium text-slate-700 mt-3">Get's Blood Bottles</p>
                    <p class="mt-2 text-sm text-slate-500">You can get Information About the Required a Blood Bottles</p>
                </div>
            </a>
            <a href="./redirect_controller1.php">
            <div
                class="w-full p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full text-white shadow-lg shadow-orange-200">
                    <img src="https://ebloodbank.gov.in/eBloodbank/assets/img/logo/5.png" alt="" class="w-12">
                </span>
                <p class="text-xl font-medium text-slate-700 mt-3">Set the Blood Received Data</p>
                <p class="mt-2 text-sm text-slate-500">Hospital/Organisation Set the Blood Received Information</p>
            </div>
            </a>
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
    <script src="index.js"></script>
</body>

</html>
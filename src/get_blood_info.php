<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $blood_group = $_POST['blood_group'];
        $city = $_POST['city'];
        
        $con = mysqli_connect("localhost","root","","blood_bank_management_system");
        if(!$con)
        {
            die("Failed to make Connection with DB" . mysqli_connect_error());
        }
        $sql = "SELECT * FROM hospital WHERE hCity LIKE '%$city%'";
        
        $result = mysqli_query($con,$sql);
    }

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
        table, th, td ,tr{
            border: 3px solid black;
            border-collapse: collapse;
            text-align:center;
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
                        class="hover:text-blue-500 hover:cursor-pointer hover:border-b-2 hover:scale-110 hover:border-b-black mr-7 ">
                        <i class="fa-solid fa-house"></i>Home</a>
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

        <div class="mt-16">
            <form action="./get_blood_info.php" method="post">
                <div class="flex justify-around">
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
                        <label for="city" class="block text-sm font-medium text-gray-700  mb-2">Enter City</label>
                        <input type="text" name="city" id="city" class="shadow-sm rounded-md w-full px-4 py-2 border border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="ex. surat" required>
                    </div>
                </div>
                <div class="flex justify-center items-center w-full">
                    <button  type="submit" class=" py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                </div>
            </form>
        </div>

        <?php if(isset($result) && mysqli_num_rows($result) > 0 ):  ?>
            <div class="h-auto rounded-lg mt-12 px-36">
                <h1 class="text-center text-3xl mb-11">Hospital List :</h1>
                <table class="w-full rounded-3xl">
                    <thead class="w-full">
                        <tr >
                            <th>No</th>
                            <th>Hospital Name</th>
                            <th>Hospital Address</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Blood Type</th>
                            <th>Blood Bottles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 1;
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $row['hName']; ?></td>
                                <td><?php echo $row['hAddress']; ?></td>
                                <td><?php echo $row['hState']; ?></td>
                                <td><?php echo $row['hCity']; ?></td>
                                <td><?php echo $blood_group; ?></td>
                                <td><?php echo $row[$blood_group]; ?></td>
                            </tr>
                        <?php
                            $count++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

        <div class="w-full h-[200px] mt-10">
           
            <div class="w-full h-full mx-auto">

                <footer
                    class="h-full p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-zinc-100">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                            href="" class="hover:underline" target="_blank">Mango</a>. All
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
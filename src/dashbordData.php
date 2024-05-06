<?php
    session_start();
    $result;
    $hName;

    if(isset($_SESSION['username']) && $_SESSION['role'] == 'hospital')
    {
        $con = mysqli_connect("localhost","root","","blood_bank_management_system");
        if(!$con)
        {
            die("Failed To Make Connection" . mysqli_connect_error());
        }
        $username = $_SESSION['username'];
        $sql = "SELECT hName,ap,an,bp,bn,abp,abn,op,onn FROM hospital WHERE username = '$username';";

        $blood_group = array("A+","A-","B+","B-","AB+","AB-","O+","O-");
        $result_key = array("ap","an","bp","bn","abp","abn","op","onn");

        $result = mysqli_query($con,$sql);
        $data = array();
        $count = 0;

        if($result)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                foreach($blood_group as $group)
                {
                    $data[$count]["label"] = $group;
                    $data[$count]["y"] = $row[$result_key[$count]];
                    $count += 1;
                }
                $hName = $row['hName'];
                
            }
        }
    
        mysqli_close($con);
    }
    else
    {
        if(!isset($_SESSION['username']))
        {
            echo "<script>alert('You are unknown user first do a login')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/index.php' }, 1000);</script>";
        }
        else
        {
            echo "<script>alert('You Can not access this feature')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/index.php' }, 1000);</script>";
        }
    }
    

?>
  

<!-- Html -->

<!DOCTYPE HTML>
<html>
<head>
    <script>
    window.onload = function() {
    
    var chart1 = new CanvasJS.Chart("chartContainer1", {
        animationEnabled: true,
        theme: "light2",
        title:{
            text: "<?php echo $hName; ?>"
        },
        axisY: {
            title: "Blood Bottles"
        },
        data: [{
            type: "column",
            yValueFormatString: "#,##0.## tonnes",
            dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart1.render();
    

    var chart2 = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        theme: "light2",
        title:{
            text:  "<?php echo $hName; ?>"
        },
        data: [{
            type: "doughnut",
            indexLabel: "{symbol}  {y}",
            yValueFormatString: "#,##0.0\"%\"",
            showInLegend: true,
            legendText: "{label} : {y}",
            dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart2.render();


    }
    </script>

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



        <div id="chartContainer1" style="height: 370px; " class="w-[80%] mt-12 ml-28"></div>

        <div id="chartContainer2" style="height: 370px; " class="w-[80%] mt-16 ml-28"></div>

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
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>     
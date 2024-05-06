<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['role'] == 'hospital')
        {
            $ap = $_POST['ap'];
            $an = $_POST['an'];
            $bp = $_POST['bp'];
            $bn = $_POST['bn'];
            $abp = $_POST['abp'];
            $abn = $_POST['abn'];
            $op = $_POST['op'];
            $onn = $_POST['onn'];

            $username = $_SESSION['username'];

            $con = mysqli_connect("localhost","root","","blood_bank_management_system");

            if(!$con)
            {
                die("Failed To MAke Connection With DB" . mysqli_connect_error());
            }

            $sql = "UPDATE hospital SET ap = '$ap' , an = '$an' , bp = '$bp' , bn = '$bn' , abp = '$abp' , abn = '$abn' , op = '$op' , onn = '$onn' WHERE username = '$username'";

            if(mysqli_query($con,$sql))
            {
                echo "<script>alert('Succesfully Data Inserted');</script>";
                echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/';},1000)</script>";

            }
            else
            {
                echo "<script>alert('Data is not Inserted');</script>";
            }

            mysqli_close($con);
        }
    }
    else
    {
        echo "<script>alert('No Getting any Request')</script>";
    }


?>
<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbName = "blood_bank_management_system";

        $conn = mysqli_connect($servername,$username,$password,$dbName);
        if(!$conn)
        {
            die("Connection Failed: ".mysqli_connect_error());
        }

        

        $hName = $_POST['hName'];
        $hAddress = $_POST['hAddress'];
        $hCity = $_POST['hCity'];
        $hState = $_POST['hState'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];


        $sql = "UPDATE hospital SET hName = '$hName' , hAddress = '$hAddress' , hCity = '$hCity' , hState = '$hState' WHERE username = '$username' AND password = '$password';";

        if(mysqli_query($conn,$sql))
        {
            echo "<script>alert('Login Succesfull')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/index.php' }, 1000);</script>";
            exit();
        }
        else
        {
            echo "<script>alert('Please try again.')</script>";
        }
        mysqli_close($conn);
    }
    else
    {
        echo "<script>alert('No data submitted')</script>";
    }


?>

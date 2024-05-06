<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // db information
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbName = "blood_bank_management_system";

        // make connection with db
        $conn = mysqli_connect($servername,$username,$password,$dbName);
        if(!$conn)
        {
            die("Connection failed: " . mysqli_connect_error());
        }

         // prameters
        $email = $_POST['email'];
        $password = $_POST['pass'];

        //prepare the query
        $sql = "SELECT * FROM login_info WHERE username='$email' AND password='$password'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) >= 1)
        {
            $_SESSION['logn_in'] = true;
            $_SESSION['username'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $row['entity_type'];
            // echo $row['entity_type'];
            echo "<script>alert('Login Succesfull')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/index.php' }, 1000);</script>";
            exit();
        }
        else {
            
            echo "<script>alert('Invalid email or password. Please try again.')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/login.php' }, 1000);</script>";

        }
        // Close connection
        mysqli_close($conn);
    }
    else
    {
        echo "<script>alert('No data submitted')</script>";
    }

?>
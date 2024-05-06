<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // db information
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbName = "blood_bank_management_system";

        $email = $_POST['email'];

        // make connection with db
        $conn = mysqli_connect($servername,$username,$password,$dbName);

        $sql = "SELECT password FROM login_info WHERE username = '$email'";

        $result = mysqli_query($conn,$sql);
        

        if(mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_assoc($result);
            $pass = $row['password'];
            //mail
            $check = mail($email,"Your Password","This is your Password : $pass \n\n Please Remember Above Password","From:diyorakashyap2004@gmail.com");
                
            if($check)
            {
                header("Location:http://localhost/blood_bank_management_system/src/");
            }
            else
            {
                echo "mail send nathi thayo";
            }
        }
        else
        {
            echo "<script>alert('User Not Exist')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/index.php' }, 1000);</script>";
        }
        
    }
    else
    {

    }

?>




